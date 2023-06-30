{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="mb-10">
    <h3 class="font-semibold text-xl md:text-2xl xl:text-3xl">Data Banner</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-8">
    @foreach($banners as $banner)
    <div class="grid grid-cols-2 bg-stone-50 shadow-lg">
        <div>
            <img src="/images/{{ $banner->banner }}" alt="banners">
        </div>
        <div class="p-4 flex justify-between items-center">
            <div>
                <h5 class="text-sm lg:text-base mb-3">{{ $banner->instansi }}</h5>
                <p class="text-sm lg:text-base font-semibold mb-4">"{{ $banner->tagline }}"</p>
            </div>
            <a href="#" class="text-sm lg:text-base px-3 py-1 bg-orange-400 hover:bg-orange-500 hover:text-white rounded-md">Edit</a>
        </div>
    </div>
    @endforeach
</div>

@endsection