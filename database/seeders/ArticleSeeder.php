<?php

namespace Database\Seeders;

// Model
use App\Models\Article;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Tingkatkan Kewaspadaan, Rahma Buka Lahan Jangan di Bakar',
            'excerpt' => 'Tanjungpinang, - Kepolisian Resor Tanjungpinang menggelar Apel Kesiapsiagaan Penanggulangan Kebakaran Hutan dan Lahan (Karhutla)',
            'content_text' => '<p class="mb-4">Tanjungpinang - Kepolisian Resor Tanjungpinang menggelar Apel Kesiapsiagaan Penanggulangan Kebakaran Hutan dan Lahan (Karhutla) di Wilayah Hukum Polres Tanjungpinang Tahun 2021, dihadiri Walikota Tanjungpinang, Hj. Rahma, S.IP yang berlangsung di Lapangan Apel Polres Tanjungpinang, Rabu (24/2) Pagi.</p><p class="mb-4">Walikota Tanjungpinang, Hj. Rahma, S.IP saat memimpin apel mengatakan bahwa ancaman kebakaran merupakan suatu bahaya yang dapat membawa bencana yang besar dengan akibat yang luas baik terhadap keselamatan jiwa, harta  benda dan dapat menimbulkan kerugian material maupun ancaman terhadap keselamatan jiwa.</p><p class="mb-4">"Berdasarkan data terakhir yang dimiliki oleh Pemerintah Kota Tanjungpinang melalui Dinas Pemadam Kebakaran dan Penyelamatan periode Januari - Februari 2021, kejadian kebakaran yang terjadi di wilayah Kota Tanjungpinang adalah sebanyak 48 kali kejadian yaitu 40 kejadian kebakaran hutan dan lahan yang lebih kurang 337,7 Hektar, ditambah 6 kejadian kebakaran bangunan/ rumah serta kebakaran lainnya sebanyak 2 kejadian," ucap Rahma.</p><p class="mb-4">Lebih lanjut Rahma menyampaikan bila dibandingkan data kebakaran Tahun 2020 periode Januari - Februari tercatat hanya 30 kejadian kebakaran hutan dan lahan. Dari data tersebut Tahun 2021 mengalami peningkatan persentase yang terjadi di wilayah Kota Tanjungpinang.</p>',
            'slug' => 'tingkatkan-kewaspadaan-rahma-buka-lahan-jangan-dibakar',
            'published_at' => '2023-01-03 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Tindak Lanjut Aduan Warga, Endang Lakukan Koordinasi Bersama Pihak Terkait',
            'excerpt' => 'Tanjungpinang, - Wakil Wali Kota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, melaksanakan rapat koordinasi bersama Perangkat Daerah terkait',
            'content_text' => '<p class="mb-4">Tanjungpinang – Wakil Wali Kota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, melaksanakan rapat koordinasi bersama Perangkat Daerah terkait, sebagai tindak lanjut dari peninjauan atas keluhan warga di perumahan Elang Regency pekan lalu. Rapat dilaksanakan di ruang Wakil Wali Kota, Kamis (8/12).</p><p class="mb-4">Pemerintah Kota Tanjungpinang mengundang pihak Developer bersama Lurah, Camat, dan RT/RW setempat untuk membahas penanganan terhadap laporan warga sekitar atas kekhawatiran naiknya buaya ke daratan di perumahan tersebut.</p><p class="mb-4">Endang menyampaikan agar segera dilakukan penanganan agar masyarakat merasa aman. “Diharapkan developer dapat membuat pemagaran disekitar pinggiran rawa sehingga buaya tidak bisa naik ke pemukiman warga untuk keamanan warga. Karena tanggul yang ada tidak memadai untuk meminimalisir naiknya buaya ke pemukiman,” ucapnya.</p><p class="mb-4">Endang juga berharap kepada RT, RW juga Lurah untuk melakukan pengawasan demi keamanan dan kenyamanan warga. “Bekerjasama dengan warga untuk lebih memperhatikan lingkungan tersebut, lakukan imbauan kepada warga agar selalu waspada dan berhati-hati dan segera laporkan jika melihat hal serupa,” harapnya.</p>',
            'slug' => 'tindak-lanjut-aduan-warga-endang-lakukan-koordinasi-bersama-pihak-terkait',
            'published_at' => '2023-01-05 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Pimpin Apel HUT DAMKAR, Endang Imbau Sosialisasikan Upaya Pencegahan Kebakaran',
            'excerpt' => 'Tanjungpinang, - Sempena peringatan Hari Ulang Tahun (HUT) Pemadam Kebakaran dan Penyelamatan yang ke-103 tahun, Dinas Damkar dan Penyelamatan',
            'content_text' => '<p class="mb-4">Tanjungpinang - Sempena peringatan Hari Ulang Tahun (HUT) Pemadam Kebakaran dan Penyelamatan yang ke-103 tahun, Dinas Damkar dan Penyelamatan Kota Tanjungpinang menggelar apel yang disejalankan dengan kegiatan Pencegahan, Penanggulangan, Penyelamatan Kebakaran dan Penyelamatan Non Kebakaran. Bertindak sebagai pemimpin apel, Wakil Walikota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, dihalaman kantor Damkar Kota Tanjungpinang, Selasa (1/3).</p><p class="mb-4">Endang dalam kesempatan itu menyampaikan, untuk menjadi seorang petugas pemadam kebakaran yang handal dan cakap harus mempunyai kemampuan dan disiplin yang tinggi. “Walaupun masih dengan kekurangan dan keterbatasan, melalui kegiatan pelatihan ini diharapkan dapat meningkatkan kinerja dalam rangka memberikan yang terbaik untuk masyarakat Kota Tanjungpinang,” harap Endang.</p><p class="mb-4">Lanjut dikatakannya, bahwa diperlukan persiapan personil pemadam kebakaran yang tanggap, cakap dan mampu menghadapi segala ancaman bahaya demi kenyamanan dan keselamatan masyarakat.</p><p class="mb-4">“Salah satu upaya dalam mewujudkan itu semua adalah dengan terus mengikuti pelatihan dan pengetahuan agar terbiasa dengan rintangan dan hambatan, karena petugas pemadam kebakaran bukanlah orang yang hebat melainkan terlatih untuk menghadapi situasi dan kondisi berbahaya dan berisiko tinggi,” ucapnya.</p>',
            'slug' => 'pimpin-apel-hut-damkar-endang-imbau-sosialisasikan-upaya-pencegahan-kebakaran',
            'published_at' => '2023-01-10 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Berita 4 - DAMKAR Kota Tanjungpinang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus',
            'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus.</p>',
            'slug' => 'judul-berita-4',
            'published_at' => '2023-01-20 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Berita 5 - DAMKAR Kota Tanjungpinang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus',
            'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus.</p>',
            'slug' => 'judul-berita-5',
            'published_at' => '2023-01-29 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Berita 6 - DAMKAR Kota Tanjungpinang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus',
            'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus.</p>',
            'slug' => 'judul-berita-6',
            'published_at' => '2023-02-10 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Berita 7 - DAMKAR Kota Tanjungpinang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus',
            'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus.</p>',
            'slug' => 'judul-berita-7',
            'published_at' => '2023-02-15 13:05:00'
        ]);

        Article::create([
            'category_id' => 1,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Berita 8 - DAMKAR Kota Tanjungpinang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus',
            'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus.</p>',
            'slug' => 'judul-berita-8',
            'published_at' => '2023-02-27 13:05:00'
        ]);

        Article::create([
            'category_id' => 2,
            'user_id' => 1,
            'cover' => 'article-1.jpg',
            'title' => 'Istilah Penting Pada Pemadam Kebakaran',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. At sed eum similique sint delectus earum, minus ipsa nulla debitis esse.',
            'content_text' => '<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aliquid, ab quis similique officiis eius. Suscipit ab quaerat, nostrum dicta fugit libero. Esse inventore odit quibusdam, accusantium, debitis provident nihil laboriosam vero ex totam odio illum nostrum reprehenderit sit facere minus quam molestiae nesciunt. Est beatae quidem doloremque saepe asperiores odit qui aut obcaecati. Laborum, sequi sunt perferendis sapiente placeat culpa excepturi quam earum eius. Impedit, voluptatum cupiditate eius molestias molestiae esse officia dolorem quos autem rem deserunt veniam aliquam fugit maxime blanditiis incidunt nobis explicabo architecto ad nemo corrupti magnam sequi eum quidem? Minima adipisci hic laboriosam molestias quia.</p>',
            'slug' => 'istilah-penting-pada-pemadam-kebakaran',
            'published_at' => '2023-01-12 13:05:00'
        ]);
    }
}
