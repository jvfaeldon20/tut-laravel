<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(){
    //what: store files, redirect page, manipulate image, store records, validation

        $data = request()->validate([
            // from post/create.blade.php 
            "caption" =>  "required"
           ,"image"   =>  ["required","image"]
        ]);

        // \App\Post::create($data);
        $image_path = request("image")->store("uploads","public");
        $image      = Image::make(public_path("storage/{$image_path}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
             "caption" => $data["caption"]
            ,"image"   => $image_path
        ]);

        return redirect('profile/'.auth()->user()->id);
        // return to profile page -> passing user_id to get the profile 

        dd(request()->all());
        // serialize post

        
    }
}
