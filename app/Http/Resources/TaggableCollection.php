<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaggableCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            $this->collection->transform(function ($tags) {
                return [
                    'id'          => $tags->id,
                    'tag_id'      => $tags->tag_id,
                ];
            })
        ];
    }
}
