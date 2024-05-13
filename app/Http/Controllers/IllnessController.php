<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\IllnessGroup;
use Illuminate\Http\Request;

class IllnessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $illnessesGroup = IllnessGroup::where('is_active','1')->get();
        $illnesses = Illness::where('is_active','1')->get();
        return view('symptoms')->with([
            'illnesses' => $illnesses,
            'illnessesGroup' => $illnessesGroup
        ]);
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
        $validated = $request->validate([
            'name' => 'required|string',
            'created_by' => 'required',
            'illness_group_id' => 'required|numeric'
        ]);
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        Illness::create($validated);
        $illnessesGroup = IllnessGroup::where('is_active','1')->get();
        $illnesses = Illness::where('is_active','1')->get();
        return view('symptoms')->with([
            'illnesses' => $illnesses,
            'illnessesGroup' => $illnessesGroup
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Illness $illness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Illness $illness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Illness $illness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Illness $illness)
    {
        //
    }
}
