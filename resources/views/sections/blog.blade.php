<section class="section-layout">
    <div class="title-main text-center">
        <h6 class="text-subtitle">{{ $subBlog }}</h6>
        <h3 class="text-title">Artikel <span class="text-redColorAlt">Berita</span></h3>
    </div>
    <div class="swiper blogs-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        {{-- Looping Blog Data --}}
                        @foreach($posts as $post)
                        <a href="/berita/{{ $post["slug"] }}" target="_blank">
                            <span class="blogs-title">{{ $post['title'] }}</span>
                        </a>
                        @endforeach
                        
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Tindak Lanjut Aduan Warga, Endang Lakukan Koordinasi Bersama Pihak Terkait</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Pimpin Apel HUT DAMKAR, Endang Imbau Sosialisasikan Upaya Pencegahan Kebakaran</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Articles Title 4</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Articles Title 5</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Articles Title 6</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Articles Title 7</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide blogs-column">
                <div class="blogs-card">
                    <a href="#" target="_blank">
                        <div class="blogs-img-container">
                            <img src="images/article-1.jpg" alt="article-blog" class="blogs-img-view">
                        </div>
                    </a>
                    <div class="mt-[21px]">
                        <div class="mb-[8px]">
                            <a href="#" target="_blank"><span class="blogs-categories">Information</span></a>
                        </div>
                        <a href="#" target="_blank"><span class="blogs-title">Articles Title 8</span></a>
                        <div class="mt-[8px]">
                            <a href="#"><span class="blogs-subtitle">Articles Release Time</span></a>
                            <a href="#" class="mx-[10px]"><span class="text-[#a5a3a3]">-</span></a>
                            <a href="#"><span class="blogs-subtitle">0 Comments</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>