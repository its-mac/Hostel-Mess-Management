@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Add Student</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.students') }}">Students</a></li>
                        <li class="breadcrumb-item" aria-current="page">Create</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Add New Student</h5>
            <a href="{{ route('admin.students') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
        <form action="{{ route('admin.students.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="roll_number">Roll Number <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('roll_number') is-invalid @enderror"
                                id="roll_number" name="roll_number" value="{{ old('roll_number') }}" required>
                            @error('roll_number')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="hostel_id">Hostel Assignment</label>
                            <select class="form-select @error('hostel_id') is-invalid @enderror" id="hostel_id"
                                name="hostel_id">
                                <option value="">Select Hostel</option>
                                @foreach ($hostels as $hostel)
                                    <option value="{{ $hostel->id }}" @selected(old('hostel_id') == $hostel->id)>
                                        {{ $hostel->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('hostel_id')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="room_number">Room Number</label>
                            <input type="text" class="form-control @error('room_number') is-invalid @enderror"
                                id="room_number" name="room_number" value="{{ old('room_number') }}">
                            @error('room_number')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="check_in_date">Check-in Date</label>
                            <input type="date" class="form-control @error('check_in_date') is-invalid @enderror"
                                id="check_in_date" name="check_in_date" value="{{ old('check_in_date') }}">
                            @error('check_in_date')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="check_out_date">Check-out Date</label>
                            <input type="date" class="form-control @error('check_out_date') is-invalid @enderror"
                                id="check_out_date" name="check_out_date" value="{{ old('check_out_date') }}">
                            @error('check_out_date')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="guardian_name">Guardian Name</label>
                            <input type="text" class="form-control @error('guardian_name') is-invalid @enderror"
                                id="guardian_name" name="guardian_name" value="{{ old('guardian_name') }}">
                            @error('guardian_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="emergency_contact">Emergency Contact</label>
                            <input type="tel" class="form-control @error('emergency_contact') is-invalid @enderror"
                                id="emergency_contact" name="emergency_contact" value="{{ old('emergency_contact') }}">
                            @error('emergency_contact')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status"
                        required>
                        <option value="">Select Status</option>
                        <option value="active" @selected(old('status') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status') === 'inactive')>Inactive</option>
                        <option value="graduated" @selected(old('status') === 'graduated')>Graduated</option>
                        <option value="suspended" @selected(old('status') === 'suspended')>Suspended</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary me-2">Add Student</button>
                <a href="{{ route('admin.students') }}" class="btn btn-link-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
