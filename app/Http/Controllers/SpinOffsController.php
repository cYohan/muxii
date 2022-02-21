<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class SpinOffsController extends Controller
{
    //

    public function index()
    {
        $spinOffs = Media::where('format_id', '1')->get();

        return view('sections.book.spin-offs.index', compact('spinOffs'));
    }

    public function show($id)
    {
        $spinOff = Media::find($id);

        return view('sections.book.spin-offs.show', compact('spinOff'));
    }
}