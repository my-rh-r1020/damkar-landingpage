<section class="section-layout bg-[#FAF8F9]">
    <div class="main-layout">
        <div class="w-full lg:w-8/12 px-4 md:px-6 lg:px-7 xl:px-8">
            <div class="font-semibold pb-[40px]">
                <a href="/" class="breadcrumbs-link">Home</a>
                <span class="breadcrumbs-link-active">> Berita</span>
            </div>
            <div class="title-main">
                <h3 class="text-title">Berita Terkini Damkar</h3>
            </div>
            @foreach($posts as $post)
            <div class="mb-12">
                <a href="/berita/{{ $post['slug'] }}">
                    <div class="blogs-img-container">
                        <img src="images/{{ $post['image'] }}" alt="berita-damkar" class="blogs-img-view rounded-md">
                    </div>
                </a>
                <div class="mt-3">
                    <a href="/berita/{{ $post['slug'] }}">
                        <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl hover:text-greyColorAlt transition duration-300 leading-none">{{ $post['title'] }}</span>
                    </a>
                    <div class="mt-1">
                        @foreach($post['mainText'] as $deskripsi)
                        <p class="text-justify text-[13px] lg:text-base">{{ $deskripsi }}</p>
                        @break
                        @endforeach
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div class="font-bebasNeue mr-6">
                            <span class="news-subtitle-date">Tanggal Terbit :</span>
                            <span class="news-subtitle-category cursor-pointer">{{ $post['timerelease'] }}</span>
                        </div>
                        <div class="font-bebasNeue">
                            <span class="news-subtitle-date">Kategori :</span>
                            <a href="#"><span class="news-subtitle-category">{{ $post['category'] }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>