<?php

namespace App\Http\Controllers;

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
}
