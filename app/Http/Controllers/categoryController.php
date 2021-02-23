<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    public function insertData(Request $request){
        $data = $request->except(['_token']);

        DB::table('categories')->insert($data);
        session::flash('message','Data inserted successfully');
        return redirect()->back();
    }
}
