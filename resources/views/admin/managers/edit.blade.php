@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Edit Manager</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.managers') }}">Managers</a></li>
                        <li class="breadcrumb-item" aria-current="page">Edit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Edit Manager</h5>
            <a href="{{ route('admin.managers') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
        <form action="{{ route('admin.managers.update', $manager->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $manager->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email', $manager->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" value="{{ old('phone', $manager->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="hostel_id">Assigned Hostel</label>
                            <select class="form-select @error('hostel_id') is-invalid @enderror" id="hostel_id"
                                name="hostel_id">
                                <option value="">Select Hostel</option>
                                @foreach ($hostels as $hostel)
                                    <option value="{{ $hostel->id }}" @selected(old('hostel_id', $manager->hostel_id) == $hostel->id)>
                                        {{ $hostel->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('hostel_id')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="qualification">Qualification</label>
                            <input type="text" class="form-control @error('qualification') is-invalid @enderror"
                                id="qualification" name="qualification"
                                value="{{ old('qualification', $manager->qualification) }}"
                                placeholder="e.g., Bachelor's Degree">
                            @error('qualification')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="experience">Years of Experience</label>
                            <input type="number" class="form-control @error('experience') is-invalid @enderror"
                                id="experience" name="experience" value="{{ old('experience', $manager->experience) }}"
                                min="0">
                            @error('experience')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3">{{ old('address', $manager->address) }}</textarea>
                    @error('address')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status"
                        required>
                        <option value="">Select Status</option>
                        <option value="active" @selected(old('status', $manager->status) === 'active')>Active</option>
                        <option value="inactive" @selected(old('status', $manager->status) === 'inactive')>Inactive</option>
                        <option value="leave" @selected(old('status', $manager->status) === 'leave')>On Leave</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary me-2">Update Manager</button>
                <a href="{{ route('admin.managers') }}" class="btn btn-link-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
