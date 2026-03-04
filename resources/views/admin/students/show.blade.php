@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">{{ $student->name }}</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.students') }}">Students</a></li>
                        <li class="breadcrumb-item" aria-current="page">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Student Details</h5>
            <a href="{{ route('admin.students') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Roll Number</h6>
                    <p class="mb-3">{{ $student->roll_number }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Name</h6>
                    <p class="mb-3">{{ $student->name }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Email</h6>
                    <p class="mb-3">{{ $student->email }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Phone</h6>
                    <p class="mb-3">{{ $student->phone ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Hostel</h6>
                    <p class="mb-3">{{ $student->hostel?->name ?? 'Not Assigned' }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Room Number</h6>
                    <p class="mb-3">{{ $student->room_number ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Check-in Date</h6>
                    <p class="mb-3">{{ $student->check_in_date ? $student->check_in_date->format('d M Y') : 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Check-out Date</h6>
                    <p class="mb-3">{{ $student->check_out_date ? $student->check_out_date->format('d M Y') : 'N/A' }}
                    </p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Guardian Name</h6>
                    <p class="mb-3">{{ $student->guardian_name ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Emergency Contact</h6>
                    <p class="mb-3">{{ $student->emergency_contact ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-muted small">Status</h6>
                    <p class="mb-3">
                        <span
                            class="badge bg-{{ $student->status === 'active' ? 'success' : ($student->status === 'graduated' ? 'info' : ($student->status === 'suspended' ? 'danger' : 'secondary')) }}">
                            {{ ucfirst($student->status) }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex gap-2">
            <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-primary">
                <i class="ph ph-pencil"></i> Edit
            </a>
            <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <i class="ph ph-trash"></i> Delete
                </button>
            </form>
        </div>
    </div>
@endsection
