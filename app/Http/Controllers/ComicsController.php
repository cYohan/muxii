<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Multimedia;
use App\Models\Type;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        $comics = Type::where('name', 'Comic')->first()->files;

        //return $comics;

        return view('sections.book.comics.index', compact('comics'));
    }

    public function show($id)
    {
        $files = File::find($id)->multimedias;
        $comic = File::find($id);

        //return $files;

        return view('sections.book.comics.show', compact('comic', 'files'));
    }

    public function create()
    {
        return view('sections.book.comics.create');
    }
}