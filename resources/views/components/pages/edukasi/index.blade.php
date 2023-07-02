<x-layout class="bg-lightGrey">
    <div class="main-container">
        <div class="main-title text-center">
            <h3 class="header-text">Edukasi</h3>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 mb-8 lg:mb-0">
                @if ($articles->count())
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-y-8">
                    @foreach($articles as $article)
                    <a href="/edukasi/{{ $article->slug }}" class="bg-white mt-8 md:mt-0">
                        <div class="blogs-img-container">
                            <img src="/assets/images/articles/{{ $article->cover }}" alt="gambar-berita" class="blogs-img-view rounded-md">
                        </div>
                    </a>
                    <div class="bg-white px-4 xl:px-6 py-3 md:py-4 xl:py-8">
                        <div class="mb-2 xl:mb-4">
                            <a href="/category/{{ $article->category->slug }}" class="px-2 bg-red-300 rounded-sm"><span class="news-subtitle">{{ $article->category->name }}</span></a>
                        </div>
                        <a href="/edukasi/{{ $article->slug }}">
                            <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl hover:text-greyColorAlt transition duration-300 leading-none">{{ $article->title }}</span>
                        </a>
                        <div class="mt-2">
                            <p class="text-justify text-[13px] lg:text-base">{{ $article->excerpt }}</p>
                        </div>
                        <div class="cursor-default mt-5">
                            <span class="news-subtitle">{{ $article->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-6 lg:mt-8">
                    {{ $articles->links() }}
                </div>
                @else
                <div class="bg-redColorAlt text-white text-center p-4">
                    <span class="font-bebasNeue text-lg xl:text-2xl">Tidak Ada Artikel "{{ request('search') }}"</span>
                </div>    
                @endif
            </div>
            <div class="w-full lg:w-4/12 lg:pl-8">
                <div class="bg-white px-10 py-12">
                    <div class="mb-10">
                        <div class="mb-2">
                            <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl">Pencarian</span>
                        </div>
                        <form action="/edukasi" method="get">
                            @if(request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <div>
                                <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Cari Artikel ..." class="w-full px-4 py-3 text-sm lg:text-base rounded-md focus:outline-double bg-white border-2 border-whiteColorAlt">
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="mb-2">
                            <span class="font-bebasNeue text-blackColor text-lg lg:text-2xl">Recent Articles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>