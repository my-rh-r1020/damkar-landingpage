@extends('components.layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.pages.user.dashboard.index')

@endsection