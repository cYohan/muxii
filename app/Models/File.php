<?php

namespace App\Models;

use App\Models\User;
use App\Models\Multimedia;
use App\Models\Type;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fileable = [
        'title',
        'description',
        'user_id',
    ];

    public function comicMediaCollections(): void
    {
        $this->addMediaCollection('media')
            ->useDisk('media');
    }

    /*

    public function images()
    {
        return $this->getMedia('comics');
    }

    */

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
