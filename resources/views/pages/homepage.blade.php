@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.parts.navbar.index')
@include('components.parts.homepage.herobanner')
@include('components.parts.homepage.contact')
@include('components.parts.homepage.services')
@include('components.parts.homepage.prevention')
@include('components.parts.homepage.testimonials')
@include('components.parts.homepage.blog')
@include('components.parts.footer.index')
    
@endsection