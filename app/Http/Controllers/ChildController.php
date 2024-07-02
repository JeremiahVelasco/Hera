<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Traits\LogTrait;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    use ResponseTrait, LogTrait;
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
            'guardians' => 'required',
            'given_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ]);

        $storeChild = Child::create([
            'guardians' => $data['guardians'],
            'given_name' => $data['given_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'height' => $data['height'],
            'weight' => $data['weight']
        ]);

        if (!$storeChild) {
            return $this->error();
        }

        return $this->success('Child', 'added', $storeChild->id, 201);
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
    public function destroy(Child $child)
    {
        // Delete child
        if (!$child->delete() || !$this->createLog('Deleted Child - ' . $child->number, 'Children')) {
            return $this->error();
        }
    }
}
