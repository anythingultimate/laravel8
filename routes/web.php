<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // DB::listen(function ($query){
    //     logger($query->sql, $query->bindings);
    // });

    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' => $post
    ]);

});

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts
    ]);

});

Route::get('authors/{author}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts
    ]);

});
