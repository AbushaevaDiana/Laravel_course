<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $this->imageAll();
        $this->imageContentOfAllUnpublished();
        $this->imageTitleOfFirstWithoutImage();
        $this->imageLikesOfAllPublishedWithoutImage();
        dd('end');
    }

    public function create()
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

    public function update()
    {
        $post = Post::find(6);

        $post->update([
                          'likes' => $post['likes'] + 3,
                          'is_published' => true,
                      ]);

        dd('updated');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dump($post->title);

        $post->delete();
        dd('deleted');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'Title 1',
            'content' => 'Content 2',
            'image' => 'image1',
            'likes' => 5000,
            'is_published' => true,
        ];

        $post = Post::firstOrCreate(['title' => 'Title 1'], $anotherPost);

        dump($post->content);
        dd('end');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'Title 4',
            'content' => 'Content 2 update or create new one',
            'image' => 'image1',
            'likes' => 5000,
            'is_published' => true,
        ];

        $post = Post::updateOrCreate(['title' => 'Title 3'], $anotherPost);

        dump($post->content);
        dd('end');
    }

    private function imageAll()
    {
        $posts = Post::all();
        dump($posts);
    }

    private function imageContentOfAllUnpublished()
    {
        $posts = Post::where('is_published', false)->get();
        foreach ($posts as $post) {
            dump($post->content);
        }
    }

    private function imageLikesOfAllPublishedWithoutImage()
    {
        $posts = Post::where('image', null)->where('is_published', true)->get();
        foreach ($posts as $post) {
            dump($post->likes);
        }
    }

    private function imageTitleOfFirstWithoutImage()
    {
        $post = Post::where('image', null)->first();
        dump($post->title);
    }
}
