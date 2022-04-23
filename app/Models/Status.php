<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;

use App\Trait\HasLikes;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model implements HasMedia
{
    use HasFactory, HasLikes, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'body',
        'title',
        'type',
    ];

    /* Creamos la colecccion de la galeria */

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('media')
            ->useDisk('media');
    }

    /* Construcción de relaciones */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function images()
    {
        return $this->getMedia('media');
    }
}