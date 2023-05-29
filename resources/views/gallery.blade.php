@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar.index')
@include('pages.gallery.index')
@include('components.footer.index')

@endsection