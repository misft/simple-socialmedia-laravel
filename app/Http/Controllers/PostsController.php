<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth as auth;

class PostsController extends Controller
{
    public function postPost(Request $req) {
        $auth = array(
            Auth::user()->name,
            Auth::user()->id
        );
        $this->validate($req, [
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'message' => 'required'
        ]);
        if ($req->file('file')==null) {
            $post = DB::table('posts')->insert([
                'user' => $auth[0],
                'user_id' => $auth[1],
                'title' => $req -> title,
                'message' => $req -> message,
            ]);
        }
        else {
            $post = DB::table('posts')->insert([
                'user' => $auth[0],
                'user_id' => $auth[1],
                'title' => $req -> title,
                'message' => $req -> message,
                'images' => $req -> file('file') -> store('images/', 'public')
            ]);
        }
        return redirect()->back();
    }

    public function loadPost($id) {
        $load = DB::table('posts')->where('post_id', '=', $id)->get();
        $comments = DB::table('comments as c')
                ->leftJoin('posts as p', 'c.post_id', '=', 'p.post_id', 'inner')
                ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
                ->get();
        return view('post', ['load'=>$load, 'comments'=>$comments]);
    }

    public function getImageInfo($id, $url) {
        $postid = DB::table('posts')->wPere('post_id', '=', $id)->get();
        return('<img src="'.asset($postid[0]->images).'">');
    }
    
    public function postComments($post_id, Request $req) {
        DB::table('comments')->insert([
            'post_id' => $post_id,
            'user_id' => Auth::user()->id,
            'comment' => $req -> comment
        ]);
        return redirect()->back();
    }
}