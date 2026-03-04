@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">{{ $manager->name }}</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.managers') }}">Managers</a></li>
                        <li class="breadcrumb-item" aria-current="page">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Manager Details</h5>
            <a href="{{ route('admin.managers') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Name</h6>
                    <p class="mb-3">{{ $manager->name }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Email</h6>
                    <p class="mb-3">{{ $manager->email }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Phone</h6>
                    <p class="mb-3">{{ $manager->phone ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Assigned Hostel</h6>
                    <p class="mb-3">{{ $manager->hostel?->name ?? 'Not Assigned' }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Qualification</h6>
                    <p class="mb-3">{{ $manager->qualification ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-muted small">Experience (Years)</h6>
                    <p class="mb-3">{{ $manager->experience ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <h6 class="text-muted small">Status</h6>
                    <p class="mb-3">
                        <span
                            class="badge bg-{{ $manager->status === 'active' ? 'success' : ($manager->status === 'inactive' ? 'secondary' : 'warning') }}">
                            {{ ucfirst($manager->status) }}
                        </span>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-muted small">Address</h6>
                    <p>{{ $manager->address ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex gap-2">
            <a href="{{ route('admin.managers.edit', $manager->id) }}" class="btn btn-primary">
                <i class="ph ph-pencil"></i> Edit
            </a>
            <form action="{{ route('admin.managers.destroy', $manager->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <i class="ph ph-trash"></i> Delete
                </button>
            </form>
        </div>
    </div>
@endsection
