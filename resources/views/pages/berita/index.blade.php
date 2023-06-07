<section class="section-layout bg-lightGrey">
    <div class="main-layout">
        <div class="container-layout">
            <div class="title-main">
                <h3 class="header-text">Berita Terbaru</h3>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-8/12 mb-8 lg:mb-0">
                    {{-- <div class="flex flex-wrap md:gap-y-8">
                        @foreach($posts as $post)
                        <div class="w-full md:w-6/12">
                            <a href="/berita/{{ $post['slug'] }}" class="bg-white">
                                <div class="blogs-img-container">
                                    <img src="images/article-1.jpg" alt="" class="blogs-img-view rounded-md">
                                </div>
                            </a>
                        </div>
                        <div class="w-full md:w-6/12 bg-white">
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
                        @endforeach
                    </div> --}}
                    @if ($posts->count())
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-y-8">
                        @foreach($posts as $post)
                        <a href="/berita/{{ $post->slug }}" class="bg-white mt-8 md:mt-0">
                            <div class="blogs-img-container">
                                <img src="/images/{{ $post->cover }}" alt="gambar-berita" class="blogs-img-view rounded-md">
                            </div>
                        </a>
                        <div class="bg-white px-4 xl:px-6 py-3 md:py-4 xl:py-8">
                            <div class="mb-2 xl:mb-4">
                                <a href="/category/{{ $post->category->slug }}" class="px-2 bg-red-300 rounded-sm"><span class="news-subtitle">{{ $post->category->name }}</span></a>
                            </div>
                            <a href="/berita/{{ $post->slug }}">
                                <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl hover:text-greyColorAlt transition duration-300 leading-none">{{ $post->title }}</span>
                            </a>
                            <div class="mt-2">
                                <p class="text-justify text-[13px] lg:text-base">{{ $post->excerpt }}</p>
                            </div>
                            <div class="cursor-default mt-5">
                                <span class="news-subtitle">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @endforeach
                        <div>
                            {{ $pages->links() }}
                        </div>
                    </div>
                    @else
                    <div class="bg-redColorAlt text-white text-center p-4">
                        <span class="font-bebasNeue text-lg xl:text-2xl">Tidak Ada Berita "{{ request('search') }}"</span>
                    </div>    
                    @endif
                </div>
                <div class="w-full lg:w-4/12 lg:pl-8">
                    <div class="bg-white px-10 py-12">
                        <div class="mb-10">
                            <div class="mb-2">
                                <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl">Pencarian</span>
                            </div>
                            <form action="/berita" method="get">
                                @if(request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                <div>
                                    <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Cari Berita ..." class="w-full px-4 py-3 text-sm lg:text-base rounded-md focus:outline-double bg-white border-2 border-whiteColorAlt">
                                </div>
                            </form>
                        </div>
                        <div>
                            <div class="mb-2">
                                <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl">Recent News</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>