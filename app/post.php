<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class post extends Model
{
    use HasFactory;
    protected $table= 'posts';
    protected $primaryKey='pid';


    public static function getPosts($cid){
        $posts = DB::table('posts')->where('category_id',$cid)->orderBy('updated_at', 'desc')->paginate(5);
        return $posts;
    }
}
