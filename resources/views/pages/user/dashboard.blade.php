{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="bg-white rounded shadow p-6">
    <h1 class="text-3xl font-semibold mb-8">Dashboard</h1>
    <h2 class="text-lg font-semibold mb-4">Welcome Back, {{ auth()->user()->name }}</h2>
    <p>This is your dashboard content.</p>
</div>

@endsection