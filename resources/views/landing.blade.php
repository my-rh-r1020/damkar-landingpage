@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

{{-- Navbar --}}
@include('components.navbar')

{{-- Hero Banner --}}
@include('sections.herobanner')

{{-- Contact Us --}}
@include('sections.contact')

{{-- Services --}}
@include('sections.services')

{{-- Prevention Services --}}
@include('sections.prevention')

{{-- Testimonials --}}
@include('sections.testimonials')

{{-- Blog --}}
@include('sections.blog')

{{-- Footer --}}
@include('components.footer')
    
@endsection