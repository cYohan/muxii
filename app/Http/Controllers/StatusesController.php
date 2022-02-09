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
            'body' => 'required|min:5'
        ]);

        /* $status = $request->user()->statuses()->create($validStatus); */

        $status = Status::create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        /* return $status; */

        return StatusResource::make($status);
    }
}