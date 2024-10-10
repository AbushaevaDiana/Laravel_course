<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobby = Hobby::find(1);
        dump($hobby->name);
        dump($hobby->description);
        dd($hobby->image);
    }
}
