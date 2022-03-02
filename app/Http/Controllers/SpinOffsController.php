<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Type;
use App\Models\Multimedia;
use Illuminate\Http\Request;

class SpinOffsController extends Controller
{
    //

    public function index()
    {
        $type = Type::where('name', 'Spin-off')->first();
        $spinOffs = File::where('type_id', $type->id)->get();

        return view('sections.book.spin-offs.index', compact('spinOffs'));
    }

    public function show($id)
    {
        $archivo = File::find($id);
        $spinOff = $archivo->multimedias;

        //return $archivo;

        return view('sections.book.spin-offs.show', compact('archivo'));
    }
}