<?php

// app/Http/Controllers/ActorController.php
namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    public function show($id)
    {
        $actor = Actor::findOrFail($id);
        $movies = $actor->medias;
        return view('actors.show', compact('actor', 'movies'));
    }
}
