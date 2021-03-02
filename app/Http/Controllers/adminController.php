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
       public function allPosts(){
        $posts = DB::table('posts')->orderby('pid','DESC')->paginate(20);
        foreach($posts as $post){
            $categories= explode(',',$post->category_id);
            foreach($categories as $cat){
                $postcat=DB::table('categories')->where('cid',$cat)
                ->value('title');
                $postcategories[]=$postcat;
                $postcat= implode(', ',$postcategories);
            }

            $post->category_id=$postcat;
            $postcategories=[];

        }
        $published=DB::table('posts')->where('status','publish')->count();
        $allposts= DB::table('posts')->count();
        return view('backend.posts.all-posts' ,['posts'=>$posts,'published'=>$published, 'allposts'=>$allposts]);
    }
    public function addPost(){
        $categories= DB::table('categories')->get();
        return view('backend.posts.add-post',['categories'=>$categories]);
    }
    public function editPost($id){
        $data= DB::table('posts')->where('pid',$id)->first();
        $postcat=explode(',',$data->category_id);
        $categories = DB::table('categories')->get();
        return view('backend.posts.edit',['data'=>$data, 'categories'=>$categories, 'postcat'=>$postcat]);
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

