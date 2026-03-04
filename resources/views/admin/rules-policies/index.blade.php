@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Rules & Policies</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Setup & Config</li>
                        <li class="breadcrumb-item" aria-current="page">Rules & Policies</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Rules & Policies</h5>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary btn-sm">
                    <i class="ph ph-download-simple me-1"></i>Export
                </button>
                <a href="{{ route('rules-policies.create') }}" class="btn btn-primary btn-sm">
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
                            <th>Category</th>
                            <th>Status</th>
                            <th>Effective Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rules as $rule)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="mb-0">{{ $rule->title }}</h6>
                                        <span
                                            class="text-muted f-12">{{ \Illuminate\Support\Str::limit($rule->description, 45) }}</span>
                                    </div>
                                </td>
                                <td>{{ $rule->category ?? 'General' }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{ $rule->status === 'active' ? 'success' : ($rule->status === 'draft' ? 'warning' : 'secondary') }}">
                                        {{ ucfirst($rule->status) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted">
                                        {{ optional($rule->effective_date)->format('M d, Y') ?? 'N/A' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('rules-policies.show', $rule->id) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="ph ph-eye"></i>
                                        </a>
                                        <a href="{{ route('rules-policies.edit', $rule->id) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="ph ph-pencil"></i>
                                        </a>
                                        <form method="POST" action="{{ route('rules-policies.destroy', $rule->id) }}"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Delete this rule/policy?');">
                                                <i class="ph ph-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No rules or policies available yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-3">
                <span class="text-muted">Showing 1 to {{ $rules->count() }} of {{ $rules->count() }} entries</span>
                <nav></nav>
            </div>
        </div>
    </div>
@endsection
