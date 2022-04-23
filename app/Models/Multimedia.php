<?php

namespace App\Models;

use App\Models\File;
use App\Models\Subtype;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    protected $table = "multimedias";

    protected $fileable = [
        'name',
        'rute',
        'body',
        'file_id',
        'subtype_id',
    ];

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function subtype()
    {
        return $this->belongsTo(Subtype::class);
    }
}