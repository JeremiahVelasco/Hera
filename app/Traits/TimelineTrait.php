<?php

namespace App\Traits;

use App\Models\Timeline;

trait TimelineTrait
{
    public function addStory($guardianId, $childId, $eventTypeId, $eventId)
    {
        $storeStory = Timeline::create([
            'guardian_id' => $guardianId,
            'child_id' => $childId,
            'event_type' => $eventTypeId,
            'event_id' => $eventId,
        ]);

        if (!$storeStory) {
            return $this->error();
        }

        return true;
    }
}
