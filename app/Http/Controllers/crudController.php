<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\NotificationSystem;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
class crudController extends Controller
{
    public function insertData(Request $request){
        $data = $request->except(['_token']);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');


        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
        }

        if($request->hasFile('image')){


            $data['image'] =  $this->uploadImage($tbl, $data['image']);;
        }
        if($request->has('category_id')){
            $data['category_id']= implode(',',$data['category_id']);
        }

        DB::table($tbl)->insert($data);
        session::flash('message','Data inserted successfully');
        $users = DB::table('users')->get();
        if($tbl == "posts"){
            foreach ($users as $user)
            {
                Mail::to($user->email)->send(new NotificationSystem());
            }

        }
        return redirect()->back();
    }

    public function updateData(Request $request,$id){
        $data = $request->except(['_token']);
        $tbl = decrypt($data['tbl']);

        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
        }

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }

        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->where('pid',$id)->update($data);
        session::flash('message','Data updated successfully');
        return redirect()->back();
    }

    public function updateAdv(Request $request,$id){
        $data = $request->except(['_token']);
        $tbl = decrypt($data['tbl']);

        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
        }

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }

        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->where('aid',$id)->update($data);
        session::flash('message','Data updated successfully');
        return redirect()->back();
    }

    public function uploadImage($location, $imageName){
        $name = $imageName->getClientOriginalName();
        $imagePath = $imageName->store('uploads','public');

        $image = Image::make(public_path("posts/{$imagePath}"))->fit(600,600);

         $image->save();
        return date('ymdgis').$name;
    }
}
