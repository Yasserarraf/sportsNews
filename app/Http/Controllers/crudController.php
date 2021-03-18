<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\NotificationSystem;
use Illuminate\Support\Facades\Mail;

class crudController extends Controller
{
    public function insertData(Request $request){
        $data = $request->except(['_token']);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');


        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
        }

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }
        if($request->has('category_id')){
            $data['category_id']= implode(',',$data['category_id']);
        }
        
        DB::table($tbl)->insert($data);
        
        session::flash('message','Data inserted successfully');
        $users = DB::table('users')->get();
        if($tbl == "posts"){
            $subscribers = DB::table('subscribers')->get();

            if($data['status'] === 'publish'){
                foreach ($subscribers as $subscriber)
                {
                    Mail::to($subscriber->email)->send(new NotificationSystem());
                }
            }
            
        }
        return redirect()->back();
    }

    public function updateData(Request $request,$id){
        $data = $request->except(['_token']);
        $tbl = decrypt($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');

        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
        }

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }

        unset($data['tbl']);
        DB::table($tbl)->where('sid',$id)->update($data);
        session::flash('message','Data updated successfully');
        return redirect()->back();
    }
    
    public function updateData2(Request $request,$id){
        $data = $request->except(['_token']);
        $tbl = decrypt($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');

        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
        }

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }

        unset($data['tbl']);
        DB::table($tbl)->where('sid',$id)->update($data);
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

    public function subscribe(Request $request){
        $message = '';
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email !";
        }else if(DB::table('subscribers')->where('email', $request->email)->count() > 0){
            $message = "Already subscribed";
        }else {
            $data = [
                'email' => $request->email,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ];
            DB::table('subscribers')->insert($data);
            $message = 'Thank you for subscribing';
        }
        $response = array(
            'status' => 'success',
            'msg' => $message,
        );

        return response()->json($response);
    }

    public function uploadImage($location, $imageName){
        $name = $imageName->getClientOriginalName();
        $imageName->move(public_path().'/'.$location, date('ymdgis').$name);
        return date('ymdgis').$name;
    }
}
