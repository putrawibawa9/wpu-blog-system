<?php

use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ['header' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['header' => 'Blogs',
        'posts' => Post::latest()->get()]);
});
Route::get('/about', function () {
    return view('about', ['header' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['header' => 'Contact']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
      return view('post', ['header' => 'Single Post', 'post' => $post]);
});

Route::get('/users/{user:username}', function (User $user) {
    // $posts = $user->posts->load(['category', 'user']);
      return view('posts', ['header' => count($user->posts).' Post created by '.$user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    //  $posts = $category->posts->load(['category', 'user']);
      return view('posts', ['header' => count($category->posts).' Post Related to '.$category->name, 'posts' => $category->posts]);
});
