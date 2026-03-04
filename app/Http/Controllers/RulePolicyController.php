<?php

namespace App\Http\Controllers;

use App\Models\RulePolicy;
use Illuminate\Http\Request;

class RulePolicyController extends Controller
{
    public function index()
    {
        $rules = RulePolicy::latest()->get();

        return view('admin.rules-policies.index', compact('rules'));
    }

    public function create()
    {
        return view('admin.rules-policies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'effective_date' => ['nullable', 'date'],
            'status' => ['required', 'in:active,draft,archived'],
        ]);

        RulePolicy::create($validated);

        return redirect()->route('rules-policies.index')->with('success', 'Rule / policy created successfully.');
    }

    public function show(RulePolicy $rulePolicy)
    {
        return view('admin.rules-policies.show', [
            'rule' => $rulePolicy,
        ]);
    }

    public function edit(RulePolicy $rulePolicy)
    {
        return view('admin.rules-policies.edit', [
            'rule' => $rulePolicy,
        ]);
    }

    public function update(Request $request, RulePolicy $rulePolicy)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'effective_date' => ['nullable', 'date'],
            'status' => ['required', 'in:active,draft,archived'],
        ]);

        $rulePolicy->update($validated);

        return redirect()->route('rules-policies.index')->with('success', 'Rule / policy updated successfully.');
    }

    public function destroy(RulePolicy $rulePolicy)
    {
        $rulePolicy->delete();

        return redirect()->route('rules-policies.index')->with('success', 'Rule / policy deleted successfully.');
    }
}
