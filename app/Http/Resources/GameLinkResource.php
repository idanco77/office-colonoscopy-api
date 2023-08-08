<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameLinkResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'link' => $this->link,
            'category' => $this->category,
        ];
    }
}
