@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar')
@include('links.berita.detail_berita')
@include('components.footer')

@endsection