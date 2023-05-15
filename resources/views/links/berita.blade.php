<section class="section-layout bg-[#FAF8F9]">
    <div class="main-layout">
        {{-- <div class="lg:mx-[83px] xl:mx-[127px] px-[15px]">
            <div class="font-semibold pb-[40px]">
                <a href="/" class="breadcrumbs-link">Home</a>
                <span class="breadcrumbs-link-active">> Berita</span>
            </div>
        </div> --}}
        <div class="px-8">
            <div class="font-semibold pb-[40px]">
                <a href="/" class="breadcrumbs-link">Home</a>
                <span class="breadcrumbs-link-active">> Berita</span>
            </div>
            @foreach($posts as $post)
            <div>
                <a href="/berita/{{ $post['slug'] }}">
                    <div>
                        <img src="images/{{ $post['image'] }}" alt="berita-damkar" class="rounded-md">
                    </div>
                </a>
                <div class="mt-4">
                    <a href="/berita/{{ $post['slug'] }}">
                        <span class="font-bebasNeue text-blackColor text-sm sm:text-base md:text-lg lg:text-2xl hover:text-greyColorAlt transition duration-300 leading-none">{{ $post['title'] }}</span>
                    </a>
                    <div class="mb-[8px]">
                        <a href="#"><span class="font-bebasNeue text-blackColor text-base md:text-lg hover:text-redColor transition duration-300">{{ $post['category'] }}</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>