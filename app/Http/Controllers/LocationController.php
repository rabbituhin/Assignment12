<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:locations',
        ]);

        Location::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('locations.index')->with('success', 'Location created successfully');
    }

    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view('locations.show', compact('location'));
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:locations,name,' . $id,
        ]);

        $location = Location::findOrFail($id);
        $location->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('locations.index')->with('success', 'Location updated successfully');
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Location deleted successfully');
    }
}