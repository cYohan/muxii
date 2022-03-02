<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Multimedia;
use App\Models\Type;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    //

    public function index()
    {
        $type = Type::where('name', 'Comic')->first();
        $comic = File::where('type_id', $type->id)->first();
        $portada = $comic->multimedias->where('name', 'Portada')->first();

        //return $portada;

        return view('sections.book.comics.index', compact('comic', 'portada'));
    }

    public function show($id)
    {
        $file = File::find($id);
        $comic = $file->multimedias;

        //return $file;

        return view('sections.book.comics.show', compact('file'));
    }
}