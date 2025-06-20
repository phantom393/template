@extends('layouts.admin')

@section('content')
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5">
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="" class="text-muted text-hover-primary">Home</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">Dashboards</li>
    </ul>
</div>
<div>
    <h1>Welcome to the Dashboard</h1>
    <p>This content goes inside the @yield('content') spot.</p>
</div>
@endsection