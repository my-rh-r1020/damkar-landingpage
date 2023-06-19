@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')
@include('components.parts.navbar.index')

<x-layout class="bg-lightGrey">
    <div class="main-container">
        <div class="main-title text-center">
            <h6 class="font-bebasNeue text-sm md:text-lg xl:text-xl 2xl:text-2xl text-greyColorAlt mb-2 tracking-widest">Struktur Organisasi</h6>
            <h3 class="header-text">Dinas Pemadam Kebakaran dan Penyelamatan</h3>
        </div>
        <div>
            
        </div>
    </div>
</x-layout>

@include('components.parts.footer.index')
@endsection