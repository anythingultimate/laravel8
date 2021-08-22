<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return Post::find('my-first-post');
    $post = Post::all();
    // ddd($post);
    // ddd($post[0] -> getContents());
    return view('posts', [
        'posts' => $post
    ]);
});

Route::get('posts/{post}', function ($slug) {
    // Find a post by its slug and pass it to a view called "post"

    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);

})->where('post', '[A-z_\-]+');
