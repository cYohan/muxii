<?php

namespace App\Http\Controllers;

use App\Models\TemporalyFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName(); //Nombre del archivo
            $extension = $file->getClientOriginalExtension(); //Extensión del archivo

            $folder = uniqid() . '_' . now()->timestamp; //Nombre del folder donde se va a guardar
            $file->storeAs('avatars/tmp/' . $folder, $filename); //Ruta donde se va a guardar el archivo

            /*
            TemporalyFile::create([
                'folder' => $folder,
                'filename' => $filename,
                'extension' => $extension,
            ]);

            */

            $temporaly = new TemporalyFile();
            $temporaly->folder = $folder;
            $temporaly->filename = $filename;
            $temporaly->extension = $extension;

            $temporaly->save();


            return $folder;
        }

        return '';
    }
}