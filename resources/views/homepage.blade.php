@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar.index')
@include('pages.homepage.herobanner')
@include('pages.homepage.contact')
@include('pages.homepage.services')
@include('pages.homepage.prevention')
@include('pages.homepage.testimonials')
@include('pages.homepage.blog')
@include('components.footer.index')
    
@endsection