<section class="section-layout">
    <div class="main-layout w-full">
        <div class="lg:mx-[83px] xl:mx-[127px] px-[15px]">
            <div class="font-semibold pb-[40px]">
                <a href="/" class="text-redColor text-xs md:text-sm xl:text-base">Home</a>
                <span class="text-slate-400 text-xs md:text-sm xl:text-base">> {{ $post['title'] }}</span>
            </div>
            <div class="title-main">
                <h3 class="font-bebasNeue text-xl md:text-2xl lg:text-3xl xl:text-4xl">{{ $post['title'] }}</h3>
                <span class="text-[#a5a3a3] text-xs md:text-sm xl:text-base">{{ $post['timerelease'] }}</span>
            </div>
            <div class="pb-8">
                <img src="/images/{{ $post['image'] }}" alt="berita-image" class="w-full mx-auto lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl">
            </div>
            <div class="text-justify text-sm lg:text-base text-blackColor">
                <article>
                    @foreach($post['mainText'] as $textPost)
                    <p class="mb-4">{{ $textPost }}</p>
                    @endforeach
                </article>
            </div>
            <div class="mt-12 mb-16 w-full">
                <a href="#" class="blogs-category-news">
                    <span class="blogs-categories-text">Kategori 1</span>
                </a>
                <a href="#" class="blogs-category-news">
                    <span class="blogs-categories-text">Kategori 2</span>
                </a>
                <a href="#" class="blogs-category-news">
                    <span class="blogs-categories-text">Kategori 3</span>
                </a>
            </div>
            <div class="py-7 flex w-full justify-between border border-white border-t-slate-300 border-b-slate-300">
                <button name="fav-btn" type="button">
                    <span class="blogs-social-media border border-1 border-slate-300 hover:text-redColorAlt"><i class='bx bx-heart text-xl'></i></span>
                </button>
                <div>
                    <span class="mr-3 text-sm xl:text-base">Bagikan Artikel ini :</span>
                    <a href="https://www.facebook.com/profile.php?id=100064204235419" target="_blank">
                        <span class="blogs-social-media bg-[#1877F2]"><i class='bx bxl-facebook text-xl text-white'></i></span>
                    </a>
                    <a href="https://wa.me/62812345678" target="_blank">
                        <span class="blogs-social-media bg-[#25D366]"><i class='bx bxl-whatsapp text-xl text-white'></i></span>
                    </a>
                    <a href="mailto:damkar.penyelamatan.tpi@gmail.com">
                        <span class="blogs-social-media bg-[#7A7E83]"><i class='bx bx-envelope text-xl text-white'></i></span>
                    </a>
                    <a href="#">
                        <span class="blogs-social-media bg-white border border-1 border-slate-150"><i class='bx bx-link text-xl text-blackColor'></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>