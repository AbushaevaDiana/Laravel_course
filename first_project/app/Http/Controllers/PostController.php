<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        dump($post->title);
        dump($post->content);
        dump($post->image);
        dump($post->likes);
        dd($post->is_published);
    }
}
