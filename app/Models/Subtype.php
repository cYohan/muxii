<?php

namespace App\Models;

use App\Models\Multimedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function multimedias()
    {
        return $this->hasMany(Multimedia::class);
    }
}