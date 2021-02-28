<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class frontController extends Controller
{
    public function __construct(){
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
        return view('frontend.index');
    }
    public function category(){
        return view('frontend.category');
    }
    public function single(){
        return view('frontend.single');
    }
}
