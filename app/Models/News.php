<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Blog extends Model
// {
//     use HasFactory;
// }

// Static Method
class News
{
    private static $news_post = [
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Tingkatkan Kewaspadaan, Rahma Buka Lahan Jangan di Bakar",
            "timerelease" => "2 Januari 2023",
            "slug" => "tingkatkan-kewaspadaan-rahma-buka-lahan-jangan-dibakar",
            "mainText" => [
                "text1" => "Tanjungpinang- Kepolisian Resor Tanjungpinang menggelar Apel Kesiapsiagaan Penanggulangan Kebakaran Hutan dan Lahan (Karhutla) di Wilayah Hukum Polres Tanjungpinang Tahun 2021, dihadiri Walikota Tanjungpinang, Hj. Rahma, S.IP yang berlangsung di Lapangan Apel Polres Tanjungpinang, Rabu (24/2) Pagi.",
                "text2" => "Walikota Tanjungpinang, Hj. Rahma, S.IP saat memimpin apel mengatakan bahwa ancaman kebakaran merupakan suatu bahaya yang dapat membawa bencana yang besar dengan akibat yang luas baik terhadap keselamatan jiwa, harta  benda dan dapat menimbulkan kerugian material maupun ancaman terhadap keselamatan jiwa.",
                "text3" => '"Berdasarkan data terakhir yang dimiliki oleh Pemerintah Kota Tanjungpinang melalui Dinas Pemadam Kebakaran dan Penyelamatan periode Januari - Februari 2021, kejadian kebakaran yang terjadi di wilayah Kota Tanjungpinang adalah sebanyak 48 kali kejadian yaitu 40 kejadian kebakaran hutan dan lahan yang lebih kurang 337,7 Hektar, ditambah 6 kejadian kebakaran bangunan/ rumah serta kebakaran lainnya sebanyak 2 kejadian," ucap Rahma.',
                "text4" => "Lebih lanjut Rahma menyampaikan bila dibandingkan data kebakaran Tahun 2020 periode Januari - Februari tercatat hanya 30 kejadian kebakaran hutan dan lahan. Dari data tersebut Tahun 2021 mengalami peningkatan persentase yang terjadi di wilayah Kota Tanjungpinang.",
                "text5" => "Kejadian kebakaran hutan dan lahan sudah menjadi atensi dan intruksi Presiden Republik Indonesia, untuk segera ditindaklanjuti secara dini. Salah satu upaya yang efektif dalam penangulangan kebakaran hutan dan lahan dilingkungan adalah dengan saling bersinergi antara Pemerintah daerah, TNI/Polri serta seluruh Stakholder serta dapat mensosialisasikan bahaya kebakaran hutan dan lahan.",
                "text6" => '"Berkenaan dengan kebakaran hutan dan lahan berdasarkan Undang-undang No. 32 Tahun 2009 tentang perlindungan dan pengelolaan lingkungan hidup Pasal 69 ayat 1 huruf (h) bahwa setiap orang dilarang melakukan pembukaan lahan dengan cara membakar, sesuai Pasal 108 dapat dikenakan sanksi pidana penjara paling singkat 3 Tahun, paling lama 10 Tahun, Serta denda antara 3 Milyar hingga 10 Milyar," lanjutnya.',
                "text7" => 'Diakhir sambutannya, Rahma meminta peran serta masyarakat dan sinergitas dari semua stakholder diharapakkan dapat saling berkoordinasi untuk melakukan upaya pencegahan kebakaran dan pemadam kebakaran hutan dan lahan. "Mari kita tingkatkan kewaspadaan dan kesiapsiagaan dalam menghadapi situasi yang saat ini terjadi seperti kebakaran hutan dan lahan, bagi warga yang ingin membuka lahan jangan dilakukan dengan cara membakar, kita juga akan terus lakukan sinergitas dan tingkatkan koordinasi sebagai upaya pencegahan kebakaran," pungkas Rahma.',
                "text8" => 'Apel Gelar Pasukan Apel Kesiapsiagaan Penanggulangan Kebakaran Hutan dan Lahan di Wilayah Hukum Polres Tanjungpinang ini dihadiri oleh, Kapolres Tanjungpinang, AKBP Fernando, S.I.K., S.H, Kepala Basarnas Tanjungpinang, Mu’min, Kepala BPBD, Dedy Syufri Yusja, S. Sos, Kepala Dinas Kebakaran dan Penyelamatan, Hantoni, S. Sos, M.Si, Kepala Satpol PP, Dr. Ahmad Yani, S.Sos,MM,M.Kes, dan Unsur FKPD yang mewakili, serta diikuti oleh Personil TNI, Polres Tanjungpinang, Dinas Perhubungan, Satpol PP, Basarnas, BPBD, dan Dinas Damkar.'
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Tindak Lanjut Aduan Warga, Endang Lakukan Koordinasi Bersama Pihak Terkait",
            "timerelease" => "5 Januari 2023",
            "slug" => "tindak-lanjut-aduan-warga-endang-lakukan-koordinasi-bersama-pihak-terkait",
            "mainText" => [
                "text1" => "Tanjungpinang – Wakil Wali Kota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, melaksanakan rapat koordinasi bersama Perangkat Daerah terkait, sebagai tindak lanjut dari peninjauan atas keluhan warga di perumahan Elang Regency pekan lalu. Rapat dilaksanakan di ruang Wakil Wali Kota, Kamis (8/12).",
                "text2" => "Pemerintah Kota Tanjungpinang mengundang pihak Developer bersama Lurah, Camat, dan RT/RW setempat untuk membahas penanganan terhadap laporan warga sekitar atas kekhawatiran naiknya buaya ke daratan di perumahan tersebut.",
                "text3" => 'Endang menyampaikan agar segera dilakukan penanganan agar masyarakat merasa aman. “Diharapkan developer dapat membuat pemagaran disekitar pinggiran rawa sehingga buaya tidak bisa naik ke pemukiman warga untuk keamanan warga. Karena tanggul yang ada tidak memadai untuk meminimalisir naiknya buaya ke pemukiman,” ucapnya.',
                "text4" => 'Endang juga berharap kepada RT, RW juga Lurah untuk melakukan pengawasan demi keamanan dan kenyamanan warga. “Bekerjasama dengan warga untuk lebih memperhatikan lingkungan tersebut, lakukan imbauan kepada warga agar selalu waspada dan berhati-hati dan segera laporkan jika melihat hal serupa,” harapnya.',
                "text5" => 'Ellyana selaku developer perumahan tersebut menyampaikan bahwa pihaknya pada proses pembangunan sudah membuat tanggul sebagai tindakan antisipasi. “Tangggul tersebut setinggi 1 meter sebagai tindakan preventif. Tapi mengenai hal ini kami akan melakukan langkah yang disarankan agar warga disana merasa aman dan tidak khawatir lagi,” ungkapnya.',
                "text6" => 'Sementara itu Kepala Dinas Pemadam Kebakaran dan Penyelamatan Kota Tanjungpinang, Agustiawarman, S.Sos, M.M, menambahkan agar terus dilakukan imbauan kepada warga. “Sampaikan kepada warga untuk segera melaporkan kepada pihak damkar melalui Call Center Damkar apabila ada buaya yang muncul di sekitar pemukiman warga untuk mendapatkan penanganan segera,” sambungnya.'
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Pimpin Apel HUT DAMKAR, Endang Imbau Sosialisasikan Upaya Pencegahan Kebakaran",
            "timerelease" => "10 Januari 2023",
            "slug" => "pimpin-apel-hut-damkar-endang-imbau-sosialisasikan-upaya-pencegahan-kebakaran",
            "mainText" => [
                "text1" => "Tanjungpinang — Sempena peringatan Hari Ulang Tahun (HUT) Pemadam Kebakaran dan Penyelamatan yang ke-103 tahun, Dinas Damkar dan Penyelamatan Kota Tanjungpinang menggelar apel yang disejalankan dengan kegiatan Pencegahan, Penanggulangan, Penyelamatan Kebakaran dan Penyelamatan Non Kebakaran. Bertindak sebagai pemimpin apel, Wakil Walikota Tanjungpinang, Endang Abdullah, S.Kp, M.Si, dihalaman kantor Damkar Kota Tanjungpinang, Selasa (1/3).",
                "text2" => 'Endang dalam kesempatan itu menyampaikan, untuk menjadi seorang petugas pemadam kebakaran yang handal dan cakap harus mempunyai kemampuan dan disiplin yang tinggi. “Walaupun masih dengan kekurangan dan keterbatasan, melalui kegiatan pelatihan ini diharapkan dapat meningkatkan kinerja dalam rangka memberikan yang terbaik untuk masyarakat Kota Tanjungpinang,” harap Endang.',
                "text3" => "Lanjut dikatakannya, bahwa diperlukan persiapan personil pemadam kebakaran yang tanggap, cakap dan mampu menghadapi segala ancaman bahaya demi kenyamanan dan keselamatan masyarakat.",
                "text4" => '“Salah satu upaya dalam mewujudkan itu semua adalah dengan terus mengikuti pelatihan dan pengetahuan agar terbiasa dengan rintangan dan hambatan, karena petugas pemadam kebakaran bukanlah orang yang hebat melainkan terlatih untuk menghadapi situasi dan kondisi berbahaya dan berisiko tinggi,” ucapnya.',
                "text5" => 'Berdasarkan data yang disampaikan rentang waktu Januari sampai Desember 2021 telah terjadi kejadian kebakaran sebanyak 121 kali, yang terbanyak adalah kebakaran hutan dan lahan sebanyak 92 kali kejadian, serta 234 kali kejadian non kebakaran. Menurut Endang, hal ini merupakan angka yang cukup tinggi dan perlu menjadi perhatian bersama dalam upaya pencegahannya. “Melihat dari data tersebut, melalui Dinas Damkar Tanjungpinang agar terus melakukan imbauan kepada masyarakat akan bahaya kebakaran dan non kebakaran, dan memberi pengetahuan kepada masyarakat terkait upaya-upaya pencegahannya,” imbaunya.',
                "text6" => "Terakhir Endang turut menyampaikan ucapan selamat hari ulang tahun Pemadam Kebakaran dan Penyelamatan yang ke-103.",
                "text7" => '“Atas nama Pemerintah Kota Tanjungpinang mengucapkan selamat hari ulang tahun Damkar yang ke- 103, semoga semakin semangat dalam menyelamatkan masyarakat Indonesia khususnya di Kota Tanjungpinang,” tutupnya.',
                "text8" => "Selesai pelaksanaan apel, Endang bersama Kepala Dinas Damkar dan Penyelamatan melakukan penyematan tanda peserta kepada perwakilan peserta kegiatan Pencegahan, Penanggulangan, Penyelamatan Kebakaran dan Penyelamatan Non Kebakaran."
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 4 - DAMKAR Kota Tanjungpinang",
            "timerelease" => "20 Januari 2023",
            "slug" => "judul-berita-4",
            "mainText" => [
                "text1" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 5 - DAMKAR Kota Tanjungpinang",
            "timerelease" => "29 Januari 2023",
            "slug" => "judul-berita-5",
            "mainText" => [
                "text1" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 6 - DAMKAR Kota Tanjungpinang",
            "timerelease" => "10 Februari 2023",
            "slug" => "judul-berita-6",
            "mainText" => [
                "text1" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 7 - DAMKAR Kota Tanjungpinang",
            "timerelease" => "15 Februari 2023",
            "slug" => "judul-berita-7",
            "mainText" => [
                "text1" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
            ]
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 8 - DAMKAR Kota Tanjungpinang",
            "timerelease" => "27 Februrari 2023",
            "slug" => "judul-berita-8",
            "mainText" => [
                "text1" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
            ]
        ]
    ];

    public static function all()
    {
        // Ambil semua data blog via self
        // return self::$news_post;

        // Ambil semua data blog via collection
        return collect(self::$news_post);
    }

    public static function find($slug)
    {
        // Ambil semua data blog via self
        // $posts = self::$news_post;

        // Ambil satu data blog
        // $detail_post = [];
        // foreach ($posts as $post) {
        //     if ($post['slug'] === $slug) {
        //         $detail_post = $post;
        //     }
        // }

        // Ambil semua data blog via static all()
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
