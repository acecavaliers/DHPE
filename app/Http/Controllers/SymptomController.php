<?php

namespace App\Http\Controllers;

use App\Models\IllnessGroup;
use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $illnesses = IllnessGroup::where('is_active','1')->get();
        $symptoms = Symptom::where('is_active','1')->get();
        return view('symptoms')->with([
            'symptoms' => $symptoms,
            'illnesses' => $illnesses
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
        Symptom::create($validated);
        $illnesses = IllnessGroup::where('is_active','1')->get();
        $symptoms = Symptom::where('is_active','1')->get();
        return view('symptoms')->with([
            'symptoms' => $symptoms,
            'illnesses' => $illnesses
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Symptom $symptom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Symptom $symptom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Symptom $symptom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Symptom $symptom)
    {
        //
    }
}
