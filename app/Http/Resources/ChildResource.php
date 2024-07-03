<?php

namespace App\Http\Resources;

use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $childTimeline = Timeline::where('child_id', $this->id)->get();

        return [
            'Child Details' => [
                'id' => $this->id,
                'Guardian' => $this->guardian_id,
                'Given Name' => $this->given_name,
                'Middle Name' => $this->middle_name,
                'Last Name' => $this->last_name,
                'Date of Birth' => $this->date_of_birth,
                'Height' => $this->height,
                'Weight' => $this->weight,
            ],
            'Child Timeline' => $childTimeline
        ];
    }
}
