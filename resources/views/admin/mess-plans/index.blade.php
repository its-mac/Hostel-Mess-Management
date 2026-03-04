@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Mess Plans</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Setup & Config</li>
                        <li class="breadcrumb-item" aria-current="page">Mess Plans</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Mess Plans</h5>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary btn-sm">
                    <i class="ph ph-download-simple me-1"></i>Export
                </button>
                <a href="{{ route('mess-plans.create') }}" class="btn btn-primary btn-sm">
                    <i class="ph ph-plus me-1"></i>Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="advanced-table">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="select-all">
                                </div>
                            </th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plans as $plan)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>{{ $plan->title }}</td>
                                <td>{{ number_format($plan->price, 2) }}</td>
                                <td>{{ $plan->duration_days }} days</td>
                                <td>{{ \Illuminate\Support\Str::limit($plan->description, 40) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('mess-plans.show', $plan->id) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="ph ph-eye"></i>
                                        </a>
                                        <a href="{{ route('mess-plans.edit', $plan->id) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="ph ph-pencil"></i>
                                        </a>
                                        <form method="POST" action="{{ route('mess-plans.destroy', $plan->id) }}"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Delete this plan?');">
                                                <i class="ph ph-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-3">
                <span class="text-muted">Showing 1 to {{ $plans->count() }} of {{ $plans->count() }} entries</span>
                <nav>
                    {{-- {{ $plans->links() }} --}}
                </nav>
            </div>
        </div>
    </div>
@endsection
