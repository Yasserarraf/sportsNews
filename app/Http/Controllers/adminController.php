<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class adminController extends Controller
{
   public function index(){
           return view('backend.index');
       }
       public function viewCategory(){
           $data = DB::table('categories')->get();
           return view('backend.categories.category',compact('data'));
       }
    public function editCategory($id){
       $singleData = DB::table('categories')->where('cid',$id)->first();
       if($singleData == NULL){
           return redirect('viewCategory');
       }
       $data = DB::table('categories')->get();
        return view('backend.categories.editCategory',compact('data','singleData'));
    }
    public function multipleDelete(Request $request){
        $data = $request->except(['_token']);
        if($data['bulk-action'] == 0){
            session::flash('message','Please select the action you want to perform ');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])){
            session::flash('message','please select the data you want to delete ' );
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach($ids as $id){
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','data deleted successfully ' );
        return redirect()->back();
    }

       public function getSettings(){
           $data = DB::table('settings')->first();
           
            if($data){
                $data->social = explode(',',$data->social);
            }

           return view('backend.settings', compact('data'));
       }

       public function addSetting(Request $request){
        return redirect()->back();
       }
}
