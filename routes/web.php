<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    $path = __DIR__."/../resources/posts/{$slug}.html";

    // dd($path);

    if (!file_exists($path)) {

        // dd('File does not exist');

        // abort(404);

        return redirect('/');
    }

    $post = cache()->remember("posts.$slug",now()->addMinutes(30), function () use ($path) {
        return file_get_contents($path);
    });

    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+');
