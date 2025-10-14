<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReactionableResource extends JsonResource
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
            'reaction_id' => $this->reaction_id,
            'user_id' => $this->user_id,
            'reactionable_id' => $this->reactionable_id,
            'reactionable_type' => $this->reactionable_type,
        ];
    }
}
