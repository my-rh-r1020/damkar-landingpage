<x-layout class="bg-lightGrey">
    <div class="main-container">
        <div class="main-title">
            <h3 class="font-bebasNeue text-blackColor text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl lg:mb-2">{{ $post->title }}</h3>
            <div class="flex items-center gap-2">
                <a href="#" class="text-[#a5a3a3] hover:text-blackColor text-xs md:text-sm xl:text-base">{{ $post->user->name }}</a>
                <span class="text-[#a5a3a3] text-xs xl:text-base">|</span>
                <span class="text-[#a5a3a3] text-xs md:text-sm xl:text-base">{{ $post->created_at->diffForHumans() }}</span>
            </div>
        </div>
        <div class="pt-1 pb-6">
            <img src="/images/{{ $post->cover }}" alt="gambar-berita" class="w-full">
        </div>
        <article class="text-justify text-sm lg:text-base text-blackColor mb-16">
            {!! $post->content_text !!}
        </article>
        <div class="py-7 flex justify-end border border-lightGrey border-t-slate-300 border-b-slate-300">
            <div class="mr-4">
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
</x-layout>