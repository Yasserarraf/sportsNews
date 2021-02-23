<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
   public function index(){
           return view('backend.index');
       }
       public function viewCategory(){
           $data = DB::table('categories')->get();

           return view('backend.category',compact('data'));
       }

       public function settings(){
           $data = DB::table('settings')->first();
           return view('backend.settings', ['data'=>$data]);
       }

       public function addSetting(Request $request){
        return redirect()->back();
       }
}
