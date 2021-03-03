<?php

namespace App\Http\Controllers;

use App\post;
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
        $categories = DB::table('categories')->where('status','on')->get();
        foreach($categories as $category){
            $posts = post::getPosts($category->cid);
            $category->posts = $posts;
        }

        return view('frontend.index',compact('categories'));
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
        $data = DB::table('posts')->where('pid',$slug)->first();

        return view('frontend.single',['data'=>$data]);
    }
}
