@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar')
@include('links.gallery')
@include('components.footer')

@endsection