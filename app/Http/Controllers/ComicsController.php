<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Multimedia;
use App\Models\Type;

use App\Http\Resources\FileResource;

use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        //$comics = Type::where('name', 'Comic')->first()->files;

        //return $comics;

        //return view('sections.book.comics.index', compact('comics'));

        $file = FileResource::collection(
            File::where('type_id', 2)->paginate()
        );

        //return $file;

        return view('sections.book.comics.index', compact('file'));
    }

    public function show($id)
    {
        $comic = FileResource::collection(
            File::where('id', $id)->get()
        );
        //dd($comic);
        //return $comic;

        $paginas = Multimedia::where('file_id', $id)->get();

        //return $paginas;

        return view('sections.book.comics.show', compact('comic', 'paginas'));
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

        dump($request['comic']);

        if ($request->hasFile('comic')) {
            $files = $request->file('comic');
            foreach ($files as $file) {

                $filename = $file->getClientOriginalName(); //Nombre del archivo
                $extension = $file->getClientOriginalExtension(); //Extensión del archivo

                $folder = uniqid() . '_' . now()->timestamp; //Nombre del folder donde se va a guardar

                $url = $folder . '/' . $filename;

                $file->addMedia(storage_path('app/media/comics/' . $url))->toMediaCollection('media'); //Ruta donde se va a guardar el archivo

            }


            return redirect(route('comics'));
        }

        //return redirect(route('home'));
    }
}