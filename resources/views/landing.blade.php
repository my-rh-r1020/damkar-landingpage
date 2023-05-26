@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar')
@include('sections.herobanner')
@include('sections.contact')
@include('sections.services')
@include('sections.prevention')
@include('sections.testimonials')
@include('sections.blog')
@include('components.footer')
    
@endsection