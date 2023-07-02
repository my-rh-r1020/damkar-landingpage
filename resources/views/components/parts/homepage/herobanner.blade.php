<section id="about">
    <div class="swiper hero-banner">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="w-full max-h-[700px] relative">
                    <img src="/assets/images/webpages/{{ $banner->banner }}" alt="hero-banner-damkar" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="font-bebasNeue text-white text-center">
                            <h4 class="mb-2 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">{{ $banner->instansi }}</h4>
                            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-[110px]">{{ $banner->tagline }}</h1>
                            <button class="red-button md:mt-4 scale-50 md:scale-75 lg:scale-90 xl:scale-100">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- JS Script --}}
@push('scripts')
<script>
    const swiperHeroBanner = new Swiper(".hero-banner", {
        spaceBetween: 30,
        effect: "fade",
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation:{
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
</script>
@endpush