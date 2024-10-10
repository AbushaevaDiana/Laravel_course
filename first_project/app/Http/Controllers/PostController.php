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

    public function create(): void
    {
        $postsArr = [
            [
                'title' => 'Title 16',
                'content' => 'Content 16',
                'image' => 'https://masterpiecer-images.s3.yandex.net/c352b1b9801c11ee9607720ccb3e265f:upscaled',
                'likes' => 9,
                'is_published' => true,
            ],
            [
                'title' => 'Title 15',
                'content' => 'Content 15',
                'image' => 'https://masterpiecer-images.s3.yandex.net/c352b1b9801c11ee9607720ccb3e265f:upscaled',
                'likes' => 5,
                'is_published' => true,
            ],
        ];

        foreach ($postsArr as $post) {
            Post::create($post);
        }

        dd('created');
    }

    public function update(): void
    {
        $post = Post::find(6);

        $post->update([
            'likes' => $post['likes'] + 3,
            'is_published' => true,
                      ]);

        dd('updated');
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
