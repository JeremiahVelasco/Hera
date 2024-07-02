<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ChildCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'child' => [
                'id' => $this->id,
                'given_name' => $this->given_name,
                'middle_name' => $this->middle_name,
                'last_name' => $this->last_name,
            ],
        ];
    }
}
