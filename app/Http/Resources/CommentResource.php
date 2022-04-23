<?php

namespace App\Http\Resources;

use App\Http\Resources\UserResource;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'body' => $this->body,
            'user'     => UserResource::make($this->user),
            'ago' => $this->created_at->diffForHumans(), //Carbon
            'likes_count' => $this->likesCount(),
            'is_liked' => $this->isLiked(),
        ];
    }
}