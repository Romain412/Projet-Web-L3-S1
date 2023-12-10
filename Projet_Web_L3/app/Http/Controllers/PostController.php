<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller{
    public function index(){
        return view('articles',['articles' => Post::all()]);
    }


    public function show(Post $post){
        return view('articleindiv',['article'=>$post]);
    }

}