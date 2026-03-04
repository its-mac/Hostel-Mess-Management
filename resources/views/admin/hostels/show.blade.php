@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Hostel Details</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('hostels.index') }}">Manage Hostels</a></li>
                        <li class="breadcrumb-item" aria-current="page">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>{{ $hostel->name }}</h5>
                    <div>
                        <a href="{{ route('hostels.edit', $hostel->id) }}" class="btn btn-sm btn-warning">
                            <i class="ph ph-pencil"></i> Edit
                        </a>
                        <a href="{{ route('hostels.index') }}" class="btn btn-sm btn-secondary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label text-muted">Hostel Name</label>
                                <p class="fw-bold">{{ $hostel->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">Warden</label>
                                <p class="fw-bold">{{ $hostel->warden ?? 'Not assigned' }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">Contact</label>
                                <p class="fw-bold">{{ $hostel->contact ?? 'Not provided' }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">Hostel Type</label>
                                <p><span
                                        class="badge bg-{{ $hostel->type == 'boys' ? 'primary' : ($hostel->type == 'girls' ? 'danger' : 'success') }}">
                                        {{ ucfirst($hostel->type) }}
                                    </span></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label text-muted">Total Rooms</label>
                                <p class="fw-bold text-primary" style="font-size: 1.5rem;">{{ $hostel->rooms }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">Capacity</label>
                                <p class="fw-bold text-success" style="font-size: 1.5rem;">{{ $hostel->capacity }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted">Pin Code</label>
                                <p class="fw-bold">{{ $hostel->pincode ?? 'Not provided' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label text-muted">Address</label>
                                <p class="fw-bold">{{ $hostel->address ?? 'Not provided' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p class="text-muted small">
                                Created on {{ $hostel->created_at->format('M d, Y \a\t h:i A') }}<br>
                                Last updated on {{ $hostel->updated_at->format('M d, Y \a\t h:i A') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6>Quick Stats</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3 pb-3 border-bottom">
                        <h3 class="text-primary mb-1">{{ $hostel->rooms }}</h3>
                        <p class="text-muted mb-0">Total Rooms</p>
                    </div>
                    <div class="text-center mb-3 pb-3 border-bottom">
                        <h3 class="text-success mb-1">{{ $hostel->capacity }}</h3>
                        <p class="text-muted mb-0">Total Capacity</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-warning mb-1">{{ number_format($hostel->capacity / max($hostel->rooms, 1), 2) }}
                        </h3>
                        <p class="text-muted mb-0">Per Room (Avg)</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6>Actions</h6>
                </div>
                <div class="card-body d-grid gap-2">
                    <a href="{{ route('hostels.edit', $hostel->id) }}" class="btn btn-warning">
                        <i class="ph ph-pencil"></i> Edit Hostel
                    </a>
                    <form action="{{ route('hostels.destroy', $hostel->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100"
                            onclick="return confirm('Are you sure you want to delete this hostel?')">
                            <i class="ph ph-trash"></i> Delete Hostel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
