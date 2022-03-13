<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporalyFile extends Model
{
    use HasFactory;

    protected $filleable = [
        'folder',
        'filename',
        'extension',
    ];
}