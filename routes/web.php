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
    //return view('welcome');
    return "Home Page";
})->name('home.index');
Route::get("/contact",function(){
    return "Contact";
})->name('home.contact');
Route::get('/posts/{id}',function($id){
    return "Blog Post ${id}";
})->name('posts.show');
Route::get('/recent-posts/{days_ago?}',function($daysAgo=20){
    return "Post from ${daysAgo} days ago";
})->name('posts.recent.index');
