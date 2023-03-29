<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Blog extends Model
// {
//     use HasFactory;
// }

// Static Method
class Blog
{
    private static $news_post = [
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Tingkatkan Kewaspadaan, Rahma Buka Lahan Jangan di Bakar",
            "timerelease" => "2 Januari 2023",
            "slug" => "tingkatkan-kewaspadaan-rahma-buka-lahan-jangan-dibakar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Tindak Lanjut Aduan Warga, Endang Lakukan Koordinasi Bersama Pihak Terkait",
            "timerelease" => "5 Januari 2023",
            "slug" => "tindak-lanjut-aduan-warga-endang-lakukan-koordinasi-bersama-pihak-terkait",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Pimpin Apel HUT DAMKAR, Endang Imbau Sosialisasikan Upaya Pencegahan Kebakaran",
            "timerelease" => "10 Januari 2023",
            "slug" => "pimpin-apel-hut-damkar-endang-imbau-sosialisasikan-upaya-pencegahan-kebakaran",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 4",
            "timerelease" => "20 Januari 2023",
            "slug" => "judul-berita-4",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 5",
            "timerelease" => "29 Januari 2023",
            "slug" => "judul-berita-5",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 6",
            "timerelease" => "10 Februari 2023",
            "slug" => "judul-berita-6",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 7",
            "timerelease" => "15 Februari 2023",
            "slug" => "judul-berita-7",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ],
        [
            "image" => "article-1.jpg",
            "category" => "Informasi",
            "title" => "Berita 8",
            "timerelease" => "27 Februrari 2023",
            "slug" => "judul-berita-8",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
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
