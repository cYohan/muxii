<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rute',
        'body'
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function status()
    {
        return $this->belongTo(Status::class);
    }
}