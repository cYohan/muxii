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
        $spinOffs = Type::where('name', 'Spin-off')->first()->files;

        //return $spinOffs;

        return view('sections.book.spin-offs.index', compact('spinOffs'));
    }

    public function show($id)
    {
        $spinOff = File::find($id)->multimedias;

        //return $spinOff;

        return view('sections.book.spin-offs.show', compact('spinOff'));
    }
}