<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Hostel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of students.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        $hostels = Hostel::all();
        return view('admin.students.create', compact('hostels'));
    }

    /**
     * Store a newly created student in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roll_number' => ['required', 'string', 'unique:students'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students'],
            'phone' => ['nullable', 'string', 'max:20'],
            'hostel_id' => ['nullable', 'exists:hostels,id'],
            'room_number' => ['nullable', 'string', 'max:50'],
            'status' => ['required', 'in:active,inactive,graduated,suspended'],
            'check_in_date' => ['nullable', 'date'],
            'check_out_date' => ['nullable', 'date'],
            'emergency_contact' => ['nullable', 'string', 'max:20'],
            'guardian_name' => ['nullable', 'string', 'max:255'],
        ]);

        Student::create($validated);

        return redirect()->route('admin.students')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified student.
     */
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student.
     */
    public function edit(Student $student)
    {
        $hostels = Hostel::all();
        return view('admin.students.edit', compact('student', 'hostels'));
    }

    /**
     * Update the specified student in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'roll_number' => ['required', 'string', 'unique:students,roll_number,' . $student->id],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email,' . $student->id],
            'phone' => ['nullable', 'string', 'max:20'],
            'hostel_id' => ['nullable', 'exists:hostels,id'],
            'room_number' => ['nullable', 'string', 'max:50'],
            'status' => ['required', 'in:active,inactive,graduated,suspended'],
            'check_in_date' => ['nullable', 'date'],
            'check_out_date' => ['nullable', 'date'],
            'emergency_contact' => ['nullable', 'string', 'max:20'],
            'guardian_name' => ['nullable', 'string', 'max:255'],
        ]);

        $student->update($validated);

        return redirect()->route('admin.students')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified student from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.students')->with('success', 'Student deleted successfully.');
    }
}
