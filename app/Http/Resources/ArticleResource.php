<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'cover' => $this->cover,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content_text' => $this->content_text,
            'slug' => $this->slug,
            'published_at' => $this->published_at,
            'created_at' => $this->created_at->format('d M Y, h:m:s'),
            'updated_at' => $this->updated_at->format('d M Y, h:m:s'),
        ];
    }
}
