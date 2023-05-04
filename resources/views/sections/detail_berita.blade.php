<section class="section-layout">
    <div class="main-layout w-full flex flex-wrap">
        <div class="font-semibold pb-[40px] px-[15px] lg:mx-[83px] xl:mx-[127px]">
            <a href="/" class="text-redColor">Home</a>
            <span class="text-slate-400">> {{ $post['title'] }}</span>
        </div>
        <div class="title-main px-[15px] lg:mx-[83px] xl:mx-[127px]">
            <h3 class="font-bebasNeue text-4xl">{{ $post['title'] }}</h3>
            <span class="text-[#a5a3a3]">{{ $post['timerelease'] }}</span>
        </div>
        <div class="px-[15px] mx-auto pb-8">
            <img src="/images/{{ $post['image'] }}" alt="berita-image" class="w-full lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl">
        </div>
        <div class="px-[15px] text-justify lg:mx-[83px] xl:mx-[127px]">
            <article>
                @foreach($post['mainText'] as $textPost)
                <p class="mb-4">{{ $textPost }}</p>
                @endforeach
            </article>
        </div>
        <div class="mt-12 mb-16 mx-[15px] w-full lg:mx-[83px] xl:mx-[127px]">
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
        <div class="py-7 mx-[15px] flex w-full justify-between border border-white border-t-slate-300 border-b-slate-300 lg:mx-[83px] xl:mx-[127px]">
            <div>
                <a href="#">
                    <span class="blogs-social-media border border-1 border-slate-300 hover:text-redColorAlt"><i class='bx bx-heart text-xl'></i></span>
                </a>
            </div>
            <div>
                <span class="mr-4">Bagikan Artikel ini :</span>
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
</section>