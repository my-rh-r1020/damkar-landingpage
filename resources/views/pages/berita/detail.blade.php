{{-- <section class="section-layout bg-lightGrey">
    <div class="main-layout">
        <div class="lg:mx-[83px] xl:mx-[127px] px-[15px]">
            <div class="breadcrumbs-container">
                <a href="/" class="breadcrumbs-link">Home</a>
                <span>> <a href="/berita" class="breadcrumbs-link">Berita</a></span>
                <span class="breadcrumbs-link-active">> {{ $post['title'] }}</span>
            </div>
            <div class="title-main">
                <h3 class="font-bebasNeue text-blackColor text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl mb-2">{{ $post['title'] }}</h3>
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
</section> --}}

{{-- $article::create([
    'category_id' => 1,
    'cover' => 'article-1.jpg',
    'title' => 'Tingkatkan Kewaspadaan, Rahma Buka Lahan Jangan di Bakar',
    'excerpt' => 'Tanjungpinang, - Kepolisian Resor Tanjungpinang menggelar Apel Kesiapsiagaan Penanggulangan Kebakaran Hutan dan Lahan (Karhutla)',
    'content_text' => '<p class="mb-4">Tanjungpinang - Kepolisian Resor Tanjungpinang menggelar Apel Kesiapsiagaan Penanggulangan Kebakaran Hutan dan Lahan (Karhutla) di Wilayah Hukum Polres Tanjungpinang Tahun 2021, dihadiri Walikota Tanjungpinang, Hj. Rahma, S.IP yang berlangsung di Lapangan Apel Polres Tanjungpinang, Rabu (24/2) Pagi.</p><p class="mb-4">Walikota Tanjungpinang, Hj. Rahma, S.IP saat memimpin apel mengatakan bahwa ancaman kebakaran merupakan suatu bahaya yang dapat membawa bencana yang besar dengan akibat yang luas baik terhadap keselamatan jiwa, harta  benda dan dapat menimbulkan kerugian material maupun ancaman terhadap keselamatan jiwa.</p><p class="mb-4">"Berdasarkan data terakhir yang dimiliki oleh Pemerintah Kota Tanjungpinang melalui Dinas Pemadam Kebakaran dan Penyelamatan periode Januari - Februari 2021, kejadian kebakaran yang terjadi di wilayah Kota Tanjungpinang adalah sebanyak 48 kali kejadian yaitu 40 kejadian kebakaran hutan dan lahan yang lebih kurang 337,7 Hektar, ditambah 6 kejadian kebakaran bangunan/ rumah serta kebakaran lainnya sebanyak 2 kejadian," ucap Rahma.</p><p class="mb-4">Lebih lanjut Rahma menyampaikan bila dibandingkan data kebakaran Tahun 2020 periode Januari - Februari tercatat hanya 30 kejadian kebakaran hutan dan lahan. Dari data tersebut Tahun 2021 mengalami peningkatan persentase yang terjadi di wilayah Kota Tanjungpinang.</p>'
    'slug' => 'tingkatkan-kewaspadaan-rahma-buka-lahan-jangan-dibakar',
    'published_at' => '2023-01-03 13:05:00'
])

$article::create([
    'category_id' => 1,
    'cover' => 'article-1.jpg',
    'title' => 'Tindak Lanjut Aduan Warga, Endang Lakukan Koordinasi Bersama Pihak Terkait',
    'excerpt' => 'Tanjungpinang, - Wakil Wali Kota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, melaksanakan rapat koordinasi bersama Perangkat Daerah terkait',
    'content_text' => '<p class="mb-4">Tanjungpinang – Wakil Wali Kota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, melaksanakan rapat koordinasi bersama Perangkat Daerah terkait, sebagai tindak lanjut dari peninjauan atas keluhan warga di perumahan Elang Regency pekan lalu. Rapat dilaksanakan di ruang Wakil Wali Kota, Kamis (8/12).</p><p class="mb-4">Pemerintah Kota Tanjungpinang mengundang pihak Developer bersama Lurah, Camat, dan RT/RW setempat untuk membahas penanganan terhadap laporan warga sekitar atas kekhawatiran naiknya buaya ke daratan di perumahan tersebut.</p><p class="mb-4">Endang menyampaikan agar segera dilakukan penanganan agar masyarakat merasa aman. “Diharapkan developer dapat membuat pemagaran disekitar pinggiran rawa sehingga buaya tidak bisa naik ke pemukiman warga untuk keamanan warga. Karena tanggul yang ada tidak memadai untuk meminimalisir naiknya buaya ke pemukiman,” ucapnya.</p><p class="mb-4">Endang juga berharap kepada RT, RW juga Lurah untuk melakukan pengawasan demi keamanan dan kenyamanan warga. “Bekerjasama dengan warga untuk lebih memperhatikan lingkungan tersebut, lakukan imbauan kepada warga agar selalu waspada dan berhati-hati dan segera laporkan jika melihat hal serupa,” harapnya.</p>',
    'slug' => 'tindak-lanjut-aduan-warga-endang-lakukan-koordinasi-bersama-pihak-terkait',
    'published_at' => '2023-01-05 13:05:00'
])

$article::create([
    'category_id' => 2,
    'cover' => 'article-1.jpg',
    'title' => 'Istilah Penting Pada Pemadam Kebakaran',
    'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At sed eum similique sint delectus earum, minus ipsa nulla debitis esse.',
    'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aliquid, ab quis similique officiis eius. Suscipit ab quaerat, nostrum dicta fugit libero. Esse inventore odit quibusdam, accusantium, debitis provident nihil laboriosam vero ex totam odio illum nostrum reprehenderit sit facere minus quam molestiae nesciunt. Est beatae quidem doloremque saepe asperiores odit qui aut obcaecati. Laborum, sequi sunt perferendis sapiente placeat culpa excepturi quam earum eius. Impedit, voluptatum cupiditate eius molestias molestiae esse officia dolorem quos autem rem deserunt veniam aliquam fugit maxime blanditiis incidunt nobis explicabo architecto ad nemo corrupti magnam sequi eum quidem? Minima adipisci hic laboriosam molestias quia.</p>',
    'slug' => 'istilah-penting-pada-pemadam-kebakaran',
    'published_at' => '2023-01-12 13:05:00'
]) --}}

<section class="section-layout bg-lightGrey">
    <div class="main-layout flex justify-center">
        <div class="container-layout md:w-10/12 lg:w-9/12 xl:w-8/12">
            <div class="title-main">
                <h3 class="font-bebasNeue text-blackColor text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl lg:mb-2">{{ $post->title }}</h3>
                <span class="text-[#a5a3a3] text-xs md:text-sm xl:text-base">{{ $post->published_at }}</span>
            </div>
            <div class="pt-1 pb-6">
                <img src="/images/{{ $post->cover }}" alt="gambar-berita" class="w-full">
            </div>
            <article class="text-justify text-sm lg:text-base text-blackColor mb-16">
                {!! $post->content_text !!}
                {{-- @foreach($post['mainText'] as $textPost)
                    <p class="mb-4">{{ $textPost }}</p>
                @endforeach --}}
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
    </div>
</section>