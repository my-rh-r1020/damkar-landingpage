<section class="section-layout">
    <div class="main-layout flex w-full flex-wrap">
        <div class="title-main px-[15px]">
            <h3 class="font-bebasNeue text-4xl">{{ $post['title'] }}</h3>
            <span class="text-[#a5a3a3]">{{ $post['timerelease'] }}</span>
        </div>
        <div class="px-[15px] mx-auto">
            <img src="/images/{{ $post['image'] }}" alt="berita-image">
        </div>
    </div>
</section>