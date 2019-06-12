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
        $post = DB::table('posts')->insert([
            'user' => $auth[0],
            'user_id' => $auth[1],
            'title' => $req -> title,
            'message' => $req -> message,
            'images' => $req -> file('file') -> store('images/', 'public')
        ]);
        return redirect()->back();
    }

    public function loadPost($id) {
        $load = DB::table('posts')->where('id', '=', $id)->get();
        $comments = DB::table('comments as c')
                ->leftJoin('posts as p', 'c.post_id', '=', 'p.id', 'inner')
                ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
                ->get();
        return view('post', ['load'=>$load, 'comments'=>$comments]);
    }

    public function getImageInfo($id, $url) {
        $postid = DB::table('posts')->where('id', '=', $id)->get();
        return('<img src="'.asset($postid[0]->images).'">');
    }
    
    public function getComments($id) {
        
    }
}