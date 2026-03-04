@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Rule / Policy Details</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('rules-policies.index') }}">Rules & Policies</a></li>
                        <li class="breadcrumb-item" aria-current="page">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>{{ $rule->title }}</h5>
            <a href="{{ route('rules-policies.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
        <div class="card-body">
            <p><strong>Category:</strong> {{ $rule->category ?? 'General' }}</p>
            <p><strong>Status:</strong> {{ ucfirst($rule->status) }}</p>
            <p><strong>Effective Date:</strong> {{ optional($rule->effective_date)->format('M d, Y') ?? 'N/A' }}</p>
            <hr>
            <p class="mb-0">{{ $rule->description }}</p>
        </div>
    </div>
@endsection
