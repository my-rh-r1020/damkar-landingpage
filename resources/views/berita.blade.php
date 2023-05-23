@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar')
@include('links.berita.listberita')
@include('components.footer')

@endsection