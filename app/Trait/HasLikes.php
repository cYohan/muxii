<?php

namespace App\Trait;

use App\Models\Like;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

trait HasLikes
{

    /* Relación Polimorfica */

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    /* Construcción de funciones */

    public function like()
    {
        $this->likes()->firstOrCreate([
            'user_id' => auth()->id(),
        ]);
    }

    public function unlike()
    {
        $this->likes()->where([
            'user_id' => auth()->id()
        ])->delete();
    }

    public function isLiked()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }
}