<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getPosts() {
        $posts = DB::table('posts as p')
            ->join('users as u', 'p.user_id', '=', 'u.id')
            ->orderByDesc('p.post_id')
            ->paginate(5);
        $getpostid = DB::table('posts')->get();
        $current = DB::table('users')->where('id', '=', Auth::user()->id)->get();
        $comments = DB::table('comments as c')->count('c.id');
        return view('home', [
            'posts'=>$posts, 
            'current'=>$current, 
            'postid'=>$getpostid,
            'sumc'=>$comments       
        ]);
    }
}
