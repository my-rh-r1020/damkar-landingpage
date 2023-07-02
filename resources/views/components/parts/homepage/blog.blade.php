{{-- <section class="main-section" id="berita">
    <div class="main-title text-center">
        <h3 class="title-text">Berita <span class="text-redColorAlt">Terkini</span></h3>
    </div>
    <div class="swiper blogs-list">
        <div class="swiper-wrapper">
            @foreach($posts as $post)
            <div class="swiper-slide">
                <div class="bg-white px-[15px]">
                    <a href="/berita/{{ $post->slug }}">
                        <div class="blogs-img-container">
                            <img src="/images/{{ $post->cover }}" alt="berita-damkar" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="/category/{{ $post->category->slug }}"><span class="blogs-categories">{{ $post->category->name }}</span></a>
                        </div>
                        <a href="/berita/{{ $post->slug }}">
                            <span class="blogs-title">{{ $post->title }}</span>
                        </a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">{{ $post->published_at }}</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section> --}}

<x-layout class="bg-white">
    <div class="main-title text-center">
        <h3 class="title-text">Berita <span class="text-redColorAlt">Terkini</span></h3>
    </div>
    <div class="swiper blogs-list">
        <div class="swiper-wrapper">
            @foreach($posts as $post)
            <div class="swiper-slide bg-white px-[15px]">
                <a href="/berita/{{ $post->slug }}">
                    <div class="blogs-img-container">
                        <img src="/assets/images/articles/{{ $post->cover }}" alt="berita-damkar" class="blogs-img-view">
                    </div>
                </a>
                <div class="mt-5">
                    <div class="mb-2">
                        <a href="/category/{{ $post->category->slug }}">
                            <span class="blogs-categories">{{ $post->category->name }}</span>
                        </a>
                    </div>
                    <a href="/berita/{{ $post->slug }}">
                        <span class="blogs-title">{{ $post->title }}</span>
                    </a>
                    <div class="mt-2">
                        <a href="#"><span class="blogs-subtitle">{{ $post->created_at->diffForHumans() }}</span></a>
                        <a href="#"><span class="text-[#a5a3a3]">|</span></a>
                        <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</x-layout>

{{-- JS Scripts --}}
@push('scripts')
<script>
    const swiperBlogs = new Swiper(".blogs-list", {
        slidesPerView: 1,
        centeredSlides: true,
        grabCursor: true,
        spaceBetween: 15,
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            }
        }
    })
</script>
@endpush