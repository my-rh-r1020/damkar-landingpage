@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar')
@include('links.profile.sejarah')
@include('components.footer')

@endsection