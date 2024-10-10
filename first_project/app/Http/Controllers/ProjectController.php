<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::find(1);
        dump($project->title);
        dump($project->content);
        dump($project->image);
        dump($project->likes);
        dump($project->is_published);
        dd($project->hobbies_id);
    }

    public function create()
    {
        $name = "Программирование";

        $hobbyValue = [
            'name' => $name,
            'description' => null,
        ];

        $hobby = Hobby::firstOrCreate(['name' => $name], $hobbyValue);

        $projectValue = [
            'title' => 'Laravel Project',
            'content' => 'Learn Laravel course',
            'image' => 'image.jpg',
            'likes' => 0,
            'is_published' => true,
            'hobbies_id' => $hobby->id,
        ];

        $project = Project::firstOrCreate(['title' => 'Laravel Project'], $projectValue);

        dump($project->id);
        dd($project->title);
    }

    public function update()
    {
        $name = "Программирование";

        $hobbyValue = [
            'name' => $name,
            'description' => null,
        ];

        $hobby = Hobby::firstOrCreate(['name' => $name], $hobbyValue);

        $projectValue = [
            'title' => 'Laravel Project',
            'content' => 'Learn Laravel course',
            'image' => 'image.jpg',
            'likes' => 3,
            'is_published' => true,
            'hobbies_id' => $hobby->id,
        ];

        $project = Project::updateOrCreate(['title' => 'Laravel Project'], $projectValue);

        dump($project->id);
        dump($project->likes);
        dd($project->title);
    }
}
