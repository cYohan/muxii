<?php

namespace App\Models;

use App\Models\User;
use App\Models\Status;

use App\Trait\HasLikes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;

    use HasLikes;
    /* protected $table = "comentarios"; */

    protected $fillable = [
        'user_id',
        'status_id',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}