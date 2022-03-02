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
        $type = Type::where('name', 'Game')->first();
        $games = File::where('type_id', $type->id)->get();

        //return $games;

        return view('sections.book.games.index', compact('games'));
    }

    public function show($id)
    {
        $archivo = File::find($id);
        $game = Multimedia::where('file_id', $archivo->id)->first();

        //return $archivo;

        return view('sections.book.games.show', compact('game'));
    }
}