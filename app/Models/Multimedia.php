<?php

namespace App\Models;

use App\Models\File;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    protected $table = "multimedias";

    public function file()
    {
        return $this->belongsTo(File::class);
    }
}