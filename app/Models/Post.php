<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{


    public static function all() {

        $files = File::files(resource_path("posts/"));

        return array_map(function($file){
            return $file -> getContents();
        }, $files);

    }

    public static function find($slug) {

        $path = resource_path("posts/{$slug}.html");

        if (!file_exists($path)) {

            // return redirect('/');
            throw new ModelNotFoundException();
        }

        $post = cache()->remember("posts.$slug",now()->addMinutes(30), function () use ($path) {
            return file_get_contents($path);
        });

        return $post;
    }
}
