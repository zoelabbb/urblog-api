<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
            'pubDate' => $this->created_at->toDateString(),
            'category' => $this->category,
            'banner' => $this->banner,
            'banner2' => $this->banner2,
            'tags' => json_decode($this->tags),  // Pastikan format tags adalah array
            'oldViewCount' => $this->view_count,
            'selected' => $this->selected,
            'oldKeywords' => json_decode($this->keywords),  // Pastikan keywords dalam format array
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
        ];
    }
}
