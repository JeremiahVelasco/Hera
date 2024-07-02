<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\EventType;
use App\Models\RecordsGrowth;
use App\Traits\LogTrait;
use App\Traits\ResponseTrait;
use App\Traits\TimelineTrait;
use Illuminate\Http\Request;

class RecordGrowthController extends Controller
{
    use ResponseTrait, LogTrait, TimelineTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'guardian_id' => 'required',
            'child_id' => 'required',
            'date' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ]);

        $storeGrowthRecord = RecordsGrowth::create([
            'guardian_id' => $data['guardian_id'],
            'child_id' => $data['child_id'],
            'date' => $data['date'],
            'height' => $data['height'],
            'weight' => $data['weight'],
        ]);

        // Update child's details
        $child = Child::where('id', $data['child_id'])->first();
        $child->height = $data['height'];
        $child->weight = $data['weight'];
        $child->save();

        // TODO : Change first parameter of addStory to use Auth user
        // Add the vaccination record to the child's timeline
        $storeTimeline = $this->addStory(1, $data['child_id'], EventType::GROWTH_UPDATE, $storeGrowthRecord->id);

        if (!$storeGrowthRecord || !$storeTimeline) {
            return $this->error();
        }

        return $this->success('Growth Update', 'added', $storeGrowthRecord->id, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
