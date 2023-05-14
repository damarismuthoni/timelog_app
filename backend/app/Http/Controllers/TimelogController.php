<?php

namespace App\Http\Controllers;

use App\Models\Timelog;
use Illuminate\Http\Request;


class TimelogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $timelogs = Timelog::all();
        return response()->json($timelogs);
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
        $timelog = Timelog::create($request->all());
        return response()->json($timelog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $timelog = Timelog::findOrFail($id);
        return response()->json($timelog);
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
        $timelog = Timelog::findOrFail($id);
        $timelog->update($request->all());
        return response()->json($timelog, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Timelog::destroy($id);
        return response()->json(null, 204);
    }
}
