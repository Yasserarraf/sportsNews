<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use \App\Post;

class frontController extends Controller
{
    public function __construct(){
        $sections = DB::table('sections')->get();
        
        foreach ($sections as &$section) {
            $section->cathegories = DB::table('categories')->where('section', $section->title)->where('status','on')->get();
        }
        unset($section);
        
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

        $latest = DB::table('posts')->where('status', 'publish')->orderBy('created_at', 'DESC')->take(5)->get();

        $leaderboard = DB::table('advertisements')->where('status', 'display')->where('location', 'leaderboard')->orderby('aid', 'DESC')->first();
        $sidebarTop = DB::table('advertisements')->where('status', 'display')->where('location', 'sidebar-top')->orderby('aid', 'DESC')->first();
        $sidebarBottom = DB::table('advertisements')->where('status', 'display')->where('location', 'sidebar-bottom')->orderby('aid', 'DESC')->first();
        
        view()->share([
            'setting'=>$setting,
            'sections'=> $sections,
            'icons'=>$icons,
            'leaderboard' => $leaderboard,
            'sidebarTop'=>$sidebarTop,
            'sidebarBottom'=>$sidebarBottom,
            'latest' => $latest
        ]);
    }

    public function index(){
        $sectionsPosts = DB::table('sections')->get()->toArray();
        
        foreach ($sectionsPosts as &$section) {
            $section->categories = DB::table('categories')
            ->where('section',$section->title)
            ->where('status', 'on')->pluck('cid')->toArray();
            
            if(count($section->categories) > 0){
                $section->posts = DB::table('posts')->where('status', 'publish')
                ->Where(function($query) use($section){
                    foreach ($section->categories as $value) {
                        $query->orWhere('category_id', 'LIKE', $value)
                        ->orWhere('category_id', 'LIKE', $value.',%')
                        ->orWhere('category_id', 'LIKE', '%,'.$value.',%')
                        ->orWhere('category_id', 'LIKE', '%,'.$value);
                    }
                })
                ->orderBy('created_at', 'DESC')->take(5)->get();
            }else{
                $section->posts = [];
            }
        }
        
        unset($section);

        return view('frontend.index',['sectionsPosts' => $sectionsPosts]);
    }

    public function category($slug){
        $cat = DB::table('categories')->where('slug',$slug)->first();

        $posts = DB::table('posts')->where('status', 'publish')
        ->Where(function($query) use($cat){
            $query->orWhere('category_id', 'LIKE', $cat->cid)
            ->orWhere('category_id', 'LIKE', $cat->cid.',%')
            ->orWhere('category_id', 'LIKE', '%,'.$cat->cid.',%')
            ->orWhere('category_id', 'LIKE', '%,'.$cat->cid);
        })
        ->orderBy('created_at', 'DESC')->paginate(10);
        
        return view('frontend.category', compact('posts','cat'));
    }

    public function section($slug){
        $section = DB::table('sections')->where('slug', $slug)->first();
        $posts = [];
        if($section){
            $section->cathegories = DB::table('categories')->where('section',$section->title)->where('status', 'on')->pluck('cid')->toArray();
            
            if(count($section->cathegories) > 0){
                $posts = DB::table('posts')->where('status', 'publish')
                ->Where(function($query) use($section){
                    foreach ($section->cathegories as $value) {
                        $query->orWhere('category_id', 'LIKE', $value)
                        ->orWhere('category_id', 'LIKE', $value.',%')
                        ->orWhere('category_id', 'LIKE', '%,'.$value.',%')
                        ->orWhere('category_id', 'LIKE', '%,'.$value);
                    }
                })
                ->orderBy('created_at', 'DESC')->paginate(10);
            }
            
          }

        return view('frontend.category', compact('posts'));
    }

    public function single(){
        return view('frontend.single');
    }

    public function article($slug){
        $data = DB::table('posts')->where('slug',$slug)->first();

        $cat=explode(',',$data->category_id);
        
        $relatedNews = DB::table('posts')->where('status', 'publish')
            ->Where(function($query) use($cat){
                foreach ($cat as $value) {
                    $query->where('category_id', 'LIKE', $value)
                    ->orWhere('category_id', 'LIKE', $value.',%')
                    ->orWhere('category_id', 'LIKE', '%,'.$value.',%')
                    ->orWhere('category_id', 'LIKE', '%,'.$value);
                }
            })
            ->where('pid', '!=', $data->pid)
            ->orderBy('created_at', 'DESC')->take(4)->get();
            
        return view('frontend.single',['data'=>$data, 'relatedNews' => $relatedNews]);
    }
    
    public function searchContent(){
        print_r("works");
        $url=url('/article');
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
