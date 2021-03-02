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

        view()->share([
            'setting'=>$setting,
            'icons'=>$icons
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
