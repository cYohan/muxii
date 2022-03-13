<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Multimedia;
use App\Models\Type;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //

    public function index()
    {
        $games = Type::where('name', 'Game')->first()->files;

        //return $games;

        return view('sections.book.games.index', compact('games'));
    }

    public function show($id)
    {
        $game = File::find($id)->multimedias->first();

        //return $game;

        return view('sections.book.games.show', compact('game'));
    }
}