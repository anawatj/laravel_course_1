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

$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_new' => true,
        'has_comments'=>true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => false
    ]
];
Route::view('/', 'home.index')->name('home.index');
Route::view('/contact','home.contact')->name('home.contact');
Route::get('/posts',function()use($posts){
    return view('posts.index',['posts'=>$posts]);
})->name('posts.index');
Route::get('/posts/{id}',function($id)use($posts){
    abort_if(!isset($posts[$id]),404);
    return view('posts.show',['post'=>$posts[$id]]);
})->name('posts.show');
Route::get('/recent-posts/{days_ago?}',function($daysAgo=20){
    return "Post from ${daysAgo} days ago";
})->name('posts.recent.index');
