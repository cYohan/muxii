<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Resources\StatusResource;

class StatusesController extends Controller
{
    public function index()
    {

        return StatusResource::collection(
            Status::latest()->paginate()
        );
    }

    public function store(Request $request)
    {

        /* $validStatus = $request->validate(['body' => 'required|min:5']); */

        request()->validate([
            'title' => 'required|min:1'
        ]);

        /* $status = $request->user()->statuses()->create($validStatus); */

        $status = Status::create([
            'title' => request('title'),
            'body' => request('body'),
            'type' => request('type'),
            'user_id' => auth()->id()
        ]);

        /* Guardamos en la base de datos y en el storage de laravel */

        if ($request->has('files')) {

            foreach ($request->file('files') as $file) {

                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '-' . now()->timestamp;

                $custom_filename = $filename . '.' . $extension;

                $status->addMedia($file)
                    ->usingFileName($custom_filename)
                    ->toMediaCollection('media');
            }
        }

        $statusResource = StatusResource::make($status);

        return  $statusResource;
    }
}