@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')
@include('components.parts.navbar.index')

<x-layout class="bg-lightGrey">
    <div class="main-container">
        <div class="main-title text-center">
            <h3 class="header-text">Daftar Anggota <br>Pemadam Kebakaran dan Penyelamatan</h3>
        </div>
        <div class="mt-10">
            <div class="swiper danru-list">
                <div class="swiper-wrapper mb-12">
                    @foreach($lists as $list)
                    <div class="swiper-slide">
                        <h4 class="font-bebasNeue text-center text-2xl md:text-3xl xl:text-4xl">{{ $list->nama_regu }} - {{ $list->lokasi }}</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8 mt-6">
                            @foreach($list->danrus as $danru)
                            <div class="rounded-md py-6 hover:bg-blue-200 text-center cursor-pointer">
                                <img src="/assets/images/webpages/{{ $danru->avatar }}" alt="profil-danru" class="w-[20%] md:w-[40%] rounded-full mx-auto mb-4">
                                <span class="font-bebasNeue tracking-widest uppercase text-xl">{{ $danru->nama_lengkap }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</x-layout>

@include('components.parts.footer.index')
@endsection

{{-- JS Script --}}
@push('scripts')
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     new Swiper(".danru-list", {
    //         spaceBetween: 30,
    //         loop: true,
    //         autoplay: {
    //             delay: 6000,
    //             disableOnInteraction: false,
    //         },
    //         pagination: {
    //             el: ".swiper-pagination",
    //             dynamicBullets: true,
    //         },
    //     })
    // })
    const danruSwiper = new Swiper(".danru-list", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    })
</script>
@endpush