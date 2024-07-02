<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use App\Models\RecordsVaccine;
use App\Traits\LogTrait;
use App\Traits\ResponseTrait;
use App\Traits\TimelineTrait;
use Illuminate\Http\Request;

class RecordVaccineController extends Controller
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
            'child_id' => 'required',
            'vaccine_id' => 'required',
            'date' => 'required',
            'dosage_number' => 'required',
            'dosage' => 'required',
            'injection_site' => 'required',
            'details' => 'required',
        ]);

        $storeVaccineRecord = RecordsVaccine::create([
            'child_id' => $data['child_id'],
            'vaccine_id' => $data['vaccine_id'],
            'date' => $data['date'],
            'dosage_number' => $data['dosage_number'],
            'dosage' => $data['dosage'],
            'injection_site' => $data['injection_site'],
            'details' => $data['details'],
        ]);

        // TODO : Change first parameter of addStory to use Auth user
        // Add the vaccination record to the child's timeline
        $storeTimeline = $this->addStory(1, $data['child_id'], EventType::VACCINATION, $storeVaccineRecord->id);

        if (!$storeVaccineRecord || !$storeTimeline) {
            return $this->error();
        }

        return $this->success('Vaccination Record', 'added', $storeVaccineRecord->id, 201);
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
