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
        $spinOffs = File::where('type_id', 1)->get();

        //return $spinOffs;

        return view('sections.book.spin-offs.index', compact('spinOffs'));
    }

    public function show($id)
    {
        $spinOff = Multimedia::where('file_id', $id)->get();

        //return $spinOff;

        return view('sections.book.spin-offs.show', compact('spinOff'));
    }
}