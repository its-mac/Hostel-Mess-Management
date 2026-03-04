<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Hostel;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of managers.
     */
    public function index()
    {
        $managers = Manager::all();
        return view('admin.managers.index', compact('managers'));
    }

    /**
     * Show the form for creating a new manager.
     */
    public function create()
    {
        $hostels = Hostel::all();
        return view('admin.managers.create', compact('hostels'));
    }

    /**
     * Store a newly created manager in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:managers'],
            'phone' => ['nullable', 'string', 'max:20'],
            'hostel_id' => ['nullable', 'exists:hostels,id'],
            'status' => ['required', 'in:active,inactive,leave'],
            'qualification' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'integer', 'min:0'],
            'address' => ['nullable', 'string', 'max:500'],
        ]);

        Manager::create($validated);

        return redirect()->route('admin.managers')->with('success', 'Manager created successfully.');
    }

    /**
     * Display the specified manager.
     */
    public function show(Manager $manager)
    {
        return view('admin.managers.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified manager.
     */
    public function edit(Manager $manager)
    {
        $hostels = Hostel::all();
        return view('admin.managers.edit', compact('manager', 'hostels'));
    }

    /**
     * Update the specified manager in storage.
     */
    public function update(Request $request, Manager $manager)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:managers,email,' . $manager->id],
            'phone' => ['nullable', 'string', 'max:20'],
            'hostel_id' => ['nullable', 'exists:hostels,id'],
            'status' => ['required', 'in:active,inactive,leave'],
            'qualification' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'integer', 'min:0'],
            'address' => ['nullable', 'string', 'max:500'],
        ]);

        $manager->update($validated);

        return redirect()->route('admin.managers')->with('success', 'Manager updated successfully.');
    }

    /**
     * Remove the specified manager from storage.
     */
    public function destroy(Manager $manager)
    {
        $manager->delete();

        return redirect()->route('admin.managers')->with('success', 'Manager deleted successfully.');
    }
}
