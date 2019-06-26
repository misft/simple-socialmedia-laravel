<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', 'ProfileController@logout');
Auth::routes();

Route::get('profile/{id}', 'ProfileController@getProfile');
Route::get('myprofile', 'ProfileController@getMyProfile');
Route::post('myprofile/uploadphoto', 'ProfileController@uploadPhoto');
Route::get('myprofile/deletephoto', 'ProfileController@deletePhoto');

Route::get('home', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@getPosts');
Route::post('home/post', 'PostsController@postPost');

Route::get('post/{id}', 'PostsController@loadPost');
Route::get('post/{id}/images//{url}', 'PostsController@getImageInfo');

Route::post('post/{post_id}/commentpost', 'PostsController@postComments'); 

Route::get('post/delete/{post_id}', 'PostsController@deletePost');
Route::get('home/edit/{post_id}', 'PostsController@editPost');