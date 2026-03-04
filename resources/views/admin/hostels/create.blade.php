@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Create Hostel</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('hostels.index') }}">Manage Hostels</a></li>
                        <li class="breadcrumb-item" aria-current="page">Create</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Create Hostel</h5>
            <a href="{{ route('hostels.index') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Please fix the following errors:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('hostels.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Hostel Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter hostel name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @else
                                        <small class="form-text text-muted">Please enter the hostel name</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Warden:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="warden"
                                        class="form-control @error('warden') is-invalid @enderror" placeholder="Warden name"
                                        value="{{ old('warden') }}">
                                    @error('warden')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @else
                                        <small class="form-text text-muted">Name of the warden</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Contact:</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph ph-phone"></i></span>
                                        <input type="text" name="contact"
                                            class="form-control @error('contact') is-invalid @enderror"
                                            placeholder="Contact number" value="{{ old('contact') }}">
                                    </div>
                                    @error('contact')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @else
                                        <small class="form-text text-muted">Please enter contact number</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-3">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Total rooms:</label>
                                <div class="col-lg-9">
                                    <input type="number" name="rooms"
                                        class="form-control @error('rooms') is-invalid @enderror"
                                        placeholder="Total number of rooms" value="{{ old('rooms') }}">
                                    @error('rooms')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @else
                                        <small class="form-text text-muted">Number of rooms in the hostel</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Capacity:</label>
                                <div class="col-lg-9">
                                    <div class="input-group search-form">
                                        <input type="number" name="capacity"
                                            class="form-control @error('capacity') is-invalid @enderror"
                                            placeholder="Total capacity" value="{{ old('capacity') }}">
                                        <span class="input-group-text bg-transparent"><i class="ph ph-info"></i></span>
                                    </div>
                                    @error('capacity')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @else
                                        <small class="form-text text-muted">Maximum number of students</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="row">
                            <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Pin code:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pincode"
                                    class="form-control @error('pincode') is-invalid @enderror"
                                    placeholder="Area pin code" value="{{ old('pincode') }}">
                                @error('pincode')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted">Postal code of location</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-3">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Address:</label>
                                <div class="col-lg-9">
                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3"
                                        placeholder="Enter hostel address">{{ old('address') }}</textarea>
                                    @error('address')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @else
                                        <small class="form-text text-muted">Street and city of the hostel</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row align-items-center">
                                <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Hostel Type:</label>
                                <div class="col-lg-9">
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="hostelTypeBoys" name="type"
                                                class="form-check-input" value="boys"
                                                {{ old('type') == 'boys' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="hostelTypeBoys">Boys</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="hostelTypeGirls" name="type"
                                                class="form-check-input" value="girls"
                                                {{ old('type') == 'girls' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="hostelTypeGirls">Girls</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="hostelTypeCoed" name="type"
                                                class="form-check-input" value="coed"
                                                {{ old('type') == 'coed' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="hostelTypeCoed">Co‑ed</label>
                                        </div>
                                    </div>
                                    @error('type')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary">Save hostel</button>
                    <a href="{{ route('hostels.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
