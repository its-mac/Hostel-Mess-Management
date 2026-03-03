@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar-manager')
@endsection

@section('content')
    @yield('content')
@endsection
