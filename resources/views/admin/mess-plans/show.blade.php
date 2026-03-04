@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Mess Plan Details</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('mess-plans.index') }}">Mess Plans</a></li>
                        <li class="breadcrumb-item" aria-current="page">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>{{ $plan->title }}</h5>
            <a href="{{ route('mess-plans.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
        <div class="card-body">
            <p><strong>Price:</strong> {{ number_format($plan->price, 2) }}</p>
            <p><strong>Duration:</strong> {{ $plan->duration_days }} days</p>
            <p><strong>Description:</strong><br>{{ $plan->description }}</p>
        </div>
    </div>
@endsection
