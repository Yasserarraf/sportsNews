<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class frontController extends Controller
{
    public function __construct(){

        $categories = DB::table('categories')->where('status','on')->get();
        view()->share([
            'categories' => $categories,
        ]);
        $setting = DB::table('settings')->first();

        if($setting){
            $setting->social = explode(',',$setting->social);

            foreach($setting->social as $social){
                $icon = explode('.',$social);
                $icon = $icon[1];
                $icons[] = $icon;
            }
        }else{
            $icons = [];
        }

        $leaderboard = DB::table('advertisements')->where('status', 'display')->where('location', 'leaderboard')->orderby('aid', 'DESC')->first();
        $sidebarTop = DB::table('advertisements')->where('status', 'display')->where('location', 'sidebar-top')->orderby('aid', 'DESC')->first();
        $sidebarBottom = DB::table('advertisements')->where('status', 'display')->where('location', 'sidebar-bottom')->orderby('aid', 'DESC')->first();

        view()->share([
            'setting'=>$setting,
            'icons'=>$icons,
            'leaderboard' => $leaderboard,
            'sidebarTop'=>$sidebarTop,
            'sidebarBottom'=>$sidebarBottom
        ]);
    }

    public function index(){
        $featured= DB::table('posts')->where('category_id', 'LIKE','%3%')->orderby('pid','DESC')->get();
        $general= DB::table('posts')->where('category_id', 'LIKE','%4%')->orderby('pid','DESC')->get();
        $tennis= DB::table('posts')->where('category_id', 'LIKE','%5%')->orderby('pid','DESC')->get();
        $others= DB::table('posts')->where('category_id', 'LIKE','%6%')->orderby('pid','DESC')->get();
        return view('frontend.index',['featured'=>$featured,'general'=>$general,'tennis'=>$tennis , 'others'=>$others]);
    }
    public function category($slug){
        $cat = DB::table('categories')->where('slug',$slug)->first();
        $posts = DB::table('posts')->where('category_id',$cat->cid)->get();

        return view('frontend.category', compact('posts','cat'));
    }
    public function single(){
        return view('frontend.single');
    }
    public function article($slug){
        $data = DB::table('posts')->where('slug',$slug)->first();
        
        return view('frontend.single',['data'=>$data]);
    }
    
    public function searchContent(){
        print_r("works");
        $url='http://127.0.0.1:8000/article';
        $text = $_GET['value'];
        $dat = DB::table('posts')->where('title','LIKE','%'.$text.'%')->orwhere('description','LIKE','%'.$text.'%')->get();
        $output= '';
        echo '<ul classe="search-result">';
           if(count($data) > 0){
               foreach($data as $d){
                echo '<li><a href=""'.$url.'/'.$d->slug.'">'.$d->title.'</a></li>';
                return 1;
               }
           }else{
                echo '<li><a>Sorry! No data found.</a></li>';
                return 0;
            }
            echo '</ul>';
        return $output;
    }
}
