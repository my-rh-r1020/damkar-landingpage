@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.parts.navbar.index')
@include('pages.berita.index')
@include('components.parts.footer.index')

@endsection