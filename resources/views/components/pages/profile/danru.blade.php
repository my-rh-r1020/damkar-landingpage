@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.parts.navbar.index')

<section class="section-layout bg-lightGrey">
    <div class="main-layout">
        <div class="container-layout">
            {{-- <div class="breadcrumbs-container">
                <a href="/" class="breadcrumbs-link">Home</a>
                <span>> <a href="/profile" class="breadcrumbs-link">Profil</a></span>
                <span class="breadcrumbs-link-active">> Danru</span>
            </div> --}}
            <div class="main-title text-center">
                <h3 class="header-text">Daftar Anggota <br>Pemadam Kebakaran dan Penyelamatan</h3>
            </div>
            <div class="mt-10">
                @foreach($lists as $list)
                <div class="mb-16">
                    <h4 class="font-bebasNeue text-center text-2xl md:text-3xl xl:text-4xl">{{ $list['regu'] }}</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8 mt-6">
                        @foreach($list['anggota'] as $member)
                        <div class="rounded-md hover:bg-blue-100 text-center cursor-pointer">
                            <img src="images/{{ $member['profil-img'] }}" alt="profil-danru" class="w-[25%] md:w-[50%] rounded-full mx-auto mb-4">
                            <span class="font-bebasNeue tracking-widest uppercase text-xl">{{ $member['nama'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('components.parts.footer.index')

@endsection