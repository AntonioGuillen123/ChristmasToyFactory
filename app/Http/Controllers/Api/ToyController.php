<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toys = Toy::with('MinimumAge')->get();
        return response()->json(compact('toys'), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $toy = Toy::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'minimun_age_id' => $request->minimun_age_id
        ]);
        $toy->save();
        return response()->json($toy, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $toy = Toy::find($id);

        return response()->json($toy, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vacancy = Vacancy::find($id);

        $vacancy->update([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'minimun_age_id' => $request->minimun_age_id
        ]);
        $toy->save();
        return response()->json($toy, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $toy = Toy::find($id);
        $$toy->delete();
    }
}