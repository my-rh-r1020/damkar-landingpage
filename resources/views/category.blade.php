@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.parts.navbar.index')

<section class="section-layout bg-lightGrey">
    <div class="main-layout">
        <div class="container-layout">
            <div class="title-main">
                <h3 class="header-text text-center">{{ $category }}</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 lg:gap-x-6 xl:gap-x-8 gap-y-8 xl:gap-y-10">
                @foreach($posts as $post)
                <div class="bg-white">
                    <a href="/berita/{{ $post->slug }}" class="mt-8 md:mt-0">
                        <div class="blogs-img-container">
                            <img src="/images/{{ $post->cover }}" alt="gambar-berita" class="blogs-img-view rounded-md">
                        </div>
                    </a>
                    <div class="px-4 xl:px-6 py-3 md:py-4 xl:py-8">
                        <a href="/berita/{{ $post->slug }}">
                            <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl hover:text-greyColorAlt transition duration-300 leading-none">{{ $post->title }}</span>
                        </a>
                        <div class="flex justify-between items-center mt-3">
                            <a href="/category/{{ $post->category->slug }}" class="px-2 bg-red-300 rounded-sm"><span class="news-subtitle">{{ $post->category->name }}</span></a>
                            <span class="news-subtitle cursor-default">{{ $post->published_at }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="mt-6 lg:mt-8">
                {{ $posts->links() }}
            </div> --}}
        </div>
    </div>
</section>

@include('components.parts.footer.index')

@endsection