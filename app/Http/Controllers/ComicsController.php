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

        $fileComic = new File();

        $fileComic->user_id = auth()->id();
        $fileComic->type_id = $tipo->id;
        $fileComic->title = $request->title;
        $fileComic->description = $request->description;

        $fileComic->save();

        //return redirect(route('home'));
    }

    public function storeAsComis(Request $request)
    {
        return $request->comic;
        if ($request->hasFile('comic')) {
            $file = $request->file('comic');
            $filename = $file->getClientOriginalName(); //Nombre del archivo
            $extension = $file->getClientOriginalExtension(); //Extensión del archivo

            $folder = uniqid() . '_' . now()->timestamp; //Nombre del folder donde se va a guardar

            $url = $folder . '/' . $filename;

            $file->addMedia(storage_path('app/media/comics/' . $url))->toMediaCollection('media'); //Ruta donde se va a guardar el archivo

            return redirect(route('comics'));
        }
    }
}