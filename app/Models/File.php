<?php

namespace App\Models;

use App\Models\User;
use App\Models\Multimedia;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fileable = [
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function multimedias()
    {
        return $this->hasMany(Multimedia::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}