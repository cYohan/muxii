<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function index()
    {

        return Status::latest()->paginate();
    }

    public function show(Status $status)
    {
    }

    public function store(Request $request)
    {

        $validStatus = $request->validate(['body' => 'required|min:5']);

        $status = $request->user()->statuses()->create($validStatus);

        return $status;
    }
}