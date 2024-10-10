<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): void
    {
        $this->imageAll();
        $this->imageContentOfAllUnpublished();
        $this->imageTitleOfFirstWithoutImage();
        $this->imageLikesOfAllPublishedWithoutImage();
        dd('end');
    }

    private function imageAll(): void
    {
        $posts = Post::all();
        dump($posts);
    }

    private function imageContentOfAllUnpublished(): void
    {
        $posts = Post::where('is_published', false)->get();
        foreach ($posts as $post) {
            dump($post->content);
        }
    }

    private function imageLikesOfAllPublishedWithoutImage(): void
    {
        $posts = Post::where('image', null)->where('is_published', true)->get();
        foreach ($posts as $post) {
            dump($post->likes);
        }
    }

    private function imageTitleOfFirstWithoutImage(): void
    {
        $post = Post::where('image', null)->first();
        dump($post->title);
    }
}
