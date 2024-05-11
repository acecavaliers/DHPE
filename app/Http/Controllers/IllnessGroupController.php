<?php

namespace App\Http\Controllers;

use App\Models\IllnessGroup;
use Illuminate\Http\Request;

class IllnessGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $illness = IllnessGroup::where('is_active','1')->get();
        return view('illness')->with("illness",$illness);
        // return IllnessGroup::all();
        // return view('getlist');
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
        ]);
        IllnessGroup::create($validated);
        $illness = IllnessGroup::where('is_active','1')->get();
        return view('illness')->with("illness",$illness);
    }

    /**
     * Display the specified resource.
     */
    public function show(IllnessGroup $illnessGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IllnessGroup $illnessGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IllnessGroup $illnessGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IllnessGroup $illnessGroup)
    {
        //
    }
}
