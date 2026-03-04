@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Managers</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">All Managers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Managers List</h5>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="ph ph-download-simple"></i> Export
                </button>
                <a href="{{ route('admin.managers.create') }}" class="btn btn-sm btn-outline-primary">
                    <i class="ph ph-plus"></i> Add New
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check-all">
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Hostel</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($managers as $manager)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>{{ $manager->name }}</td>
                            <td>{{ $manager->email }}</td>
                            <td>{{ $manager->phone ?? '-' }}</td>
                            <td>{{ $manager->hostel?->name ?? '-' }}</td>
                            <td>
                                <span
                                    class="badge bg-{{ $manager->status === 'active' ? 'success' : ($manager->status === 'inactive' ? 'secondary' : 'warning') }}">
                                    {{ ucfirst($manager->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.managers.show', $manager->id) }}"
                                        class="btn btn-outline-secondary" title="View">
                                        <i class="ph ph-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.managers.edit', $manager->id) }}"
                                        class="btn btn-outline-primary" title="Edit">
                                        <i class="ph ph-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.managers.destroy', $manager->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Delete"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="ph ph-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <div class="text-muted">No managers found. <a
                                        href="{{ route('admin.managers.create') }}">Create one</a></div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <span class="text-muted small">Showing {{ count($managers) }} manager(s)</span>
        </div>
    </div>
@endsection
