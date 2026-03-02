@extends('layouts.dashboard')

@section('sidebar')
    @include('partials.sidebar-student')
@endsection

@section('content')
    @yield('content')
@endsection
