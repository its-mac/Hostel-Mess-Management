<?php

namespace App\Http\Controllers;

use App\Models\MessPlan;
use Illuminate\Http\Request;

class MessPlanController extends Controller
{
    public function index()
    {
        $plans = MessPlan::all();
        return view('admin.mess-plans.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.mess-plans.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'duration_days' => ['required', 'integer', 'min:1'],
        ]);

        MessPlan::create($validated);

        return redirect()->route('mess-plans.index')->with('success', 'Mess plan added.');
    }

    public function show(MessPlan $messPlan)
    {
        return view('admin.mess-plans.show', ['plan' => $messPlan]);
    }

    public function edit(MessPlan $messPlan)
    {
        return view('admin.mess-plans.edit', ['plan' => $messPlan]);
    }

    public function update(Request $request, MessPlan $messPlan)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'duration_days' => ['required', 'integer', 'min:1'],
        ]);

        $messPlan->update($validated);

        return redirect()->route('mess-plans.index')->with('success', 'Mess plan updated.');
    }

    public function destroy(MessPlan $messPlan)
    {
        $messPlan->delete();
        return redirect()->route('mess-plans.index')->with('success', 'Mess plan removed.');
    }
}
