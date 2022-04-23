<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Type;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        //$comics = Type::where('name', 'Comic')->first()->files;

        //return $comics;

        //return view('sections.book.comics.index', compact('comics'));

        return view('sections.book.comics.index');
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

    public function store(Request $request)
    {
        $tipo = Type::where('name', 'Comic')->first();

        $file = new File();

        $file->user_id = auth()->id();
        $file->type_id = $tipo->id;
        $file->title = $request->title;
        $file->description = $request->description;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName(); //Nombre del archivo
            $extension = $file->getClientOriginalExtension(); //Extensión del archivo

            $folder = uniqid() . '_' . now()->timestamp; //Nombre del folder donde se va a guardar
            $file->storeAs('avatars/tmp/' . $folder, $filename); //Ruta donde se va a guardar el archivo

            return $folder;
        }
    }
}