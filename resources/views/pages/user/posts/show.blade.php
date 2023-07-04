{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="main-section main-container flex justify-center">
    <div class="md:w-10/12 xl:w-9/12">
        <div class="main-title">
            <h3 class="font-bebasNeue text-blackColor text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl lg:mb-2">{{ $post->title }}</h3>
        </div>
        <div class="pt-1 pb-6">
            <img src="/assets/images/articles/{{ $post->cover }}" alt="gambar-berita" class="w-full">
        </div>
        <article class="text-justify text-sm lg:text-base text-blackColor mb-16">
            {!! $post->content_text !!}
        </article>
        <div>
            <a href="{{ route('dashboard.articles') }}" class="main-gray-btn">Kembali</a>
        </div>
    </div>
</div>

@endsection