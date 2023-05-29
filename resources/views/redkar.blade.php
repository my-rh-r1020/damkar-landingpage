@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar.index')
@include('pages.redkar.index')
@include('components.footer.index')

@endsection