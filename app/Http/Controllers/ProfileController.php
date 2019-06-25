<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ProfileController extends Controller
{
    public function loginPageView() {
        return view('login');
    }

    public function logout() {
        Auth::logout();
        return redirect('home');
    }

    public function getProfile($id) {
        $userposts = DB::table('posts')->where('user_id', '=', $id)->get();
        $userava = DB::table('users')
            ->where('id', '=', $id)
            ->get();
        return view('profile', ['userposts' => $userposts, 'ava'=>$userava]);
    }

    public function getMyProfile() {
        $me = DB::table('users')->where('id','=', Auth::user()->id)->get();
        $recent = DB::table('posts')   
            ->where('user_id', '=', Auth::user()->id)->get();
        return view('myprofile', ['me' => $me,'posts'=>$recent]);
    }

    public function uploadPhoto(Request $req) {
        $path = $req -> file('file') -> store('images/user', 'public');
        $updatePhoto = DB::table('users')->where('id', '=', Auth::user()->id)->update([
            'avatar' => $path
        ]);

        // $file = $req -> file('file');
        // $tujuan_upload = 'images';
        // // $file->move(public_path('/images'),$file->getClientOriginalName());
        
        return redirect()->back();
    }

    public function deletePhoto() {
        $deletePhoto = DB::table('users')->where('name', '=', Auth::user()->name )->update(
            ['avatar' => null]
        );
        return redirect('myprofile');
    }
}
