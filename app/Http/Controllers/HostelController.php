<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    /**
     * Display a listing of hostels.
     */
    public function index()
    {
        $hostels = Hostel::all();
        return view('admin.hostels.index', compact('hostels'));
    }

    /**
     * Show the form for creating a new hostel.
     */
    public function create()
    {
        return view('admin.hostels.create');
    }

    /**
     * Store a newly created hostel in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:hostels'],
            'warden' => ['nullable', 'string', 'max:255'],
            'contact' => ['nullable', 'string', 'max:20'],
            'rooms' => ['required', 'integer', 'min:1'],
            'capacity' => ['required', 'integer', 'min:1'],
            'pincode' => ['nullable', 'string', 'max:10'],
            'address' => ['nullable', 'string', 'max:500'],
            'type' => ['required', 'in:boys,girls,coed'],
        ]);

        Hostel::create($validated);

        return redirect()->route('hostels.index')->with('success', 'Hostel created successfully.');
    }

    /**
     * Display the specified hostel.
     */
    public function show(Hostel $hostel)
    {
        return view('admin.hostels.show', compact('hostel'));
    }

    /**
     * Show the form for editing the specified hostel.
     */
    public function edit(Hostel $hostel)
    {
        return view('admin.hostels.edit', compact('hostel'));
    }

    /**
     * Update the specified hostel in storage.
     */
    public function update(Request $request, Hostel $hostel)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:hostels,name,' . $hostel->id],
            'warden' => ['nullable', 'string', 'max:255'],
            'contact' => ['nullable', 'string', 'max:20'],
            'rooms' => ['required', 'integer', 'min:1'],
            'capacity' => ['required', 'integer', 'min:1'],
            'pincode' => ['nullable', 'string', 'max:10'],
            'address' => ['nullable', 'string', 'max:500'],
            'type' => ['required', 'in:boys,girls,coed'],
        ]);

        $hostel->update($validated);

        return redirect()->route('hostels.index')->with('success', 'Hostel updated successfully.');
    }

    /**
     * Remove the specified hostel from storage.
     */
    public function destroy(Hostel $hostel)
    {
        $hostel->delete();
        return redirect()->route('hostels.index')->with('success', 'Hostel deleted successfully.');
    }
}
