<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\File;

class Post
{

    public static function all(){
        $files= File::files(resource_path("posts/"));

	//return array_map(function($file){
    //        return $file->getcontents();
    //    }, $files);
//
    //   }
    }
    public static function find($slug){
    if (! file_exists($path=resource_path("posts/{$slug}.html"))) {
        abort(404);}

    return cache()->remember("post.{slug}", 4, fn() => file_get_contents($path));
   }
}

	//echo $files;


