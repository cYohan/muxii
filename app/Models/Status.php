<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;

use App\Trait\HasLikes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    use HasLikes;

    protected $fillable = [
        'user_id',
        'body',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}