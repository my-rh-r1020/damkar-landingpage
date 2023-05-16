<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Home extends Model
// {
//     use HasFactory;
// }

class Home
{
    // Private Function
    private static $herobanner_items = [
        [
            "banner-damkar" => "herobanner-1.jpg",
            "banner-subtitle" => "Dinas Damkar Tanjungpinang",
            "banner-title" => "Pantang Pulang Sebelum Padam"
        ],
        [
            "banner-damkar" => "herobanner-2.jpg",
            "banner-subtitle" => "Dinas Damkar Tanjungpinang",
            "banner-title" => "Waspada Penyebab Kebakaran"
        ],
        [
            "banner-damkar" => "herobanner-3.jpg",
            "banner-subtitle" => "Dinas Damkar Tanjungpinang",
            "banner-title" => "STOP Membakar Lahan"
        ],

    ];

    private static $service_items = [
        [
            "url" => "#",
            "icon-services" => "1-pemadam.png",
            "services-title" => "Pemadam Kebakaran",
            "services-subtitle" => "Sed do elusm ad tempor"
        ],
        [
            "url" => "#",
            "icon-services" => "2-pencegahan.png",
            "services-title" => "Pencegahan & Pengendalian",
            "services-subtitle" => "Sed do elusm ad tempor"
        ],
        [
            "url" => "#",
            "icon-services" => "3-penyelamatan.png",
            "services-title" => "Penyelamatan Masyarakat",
            "services-subtitle" => "Sed do elusm ad tempor"
        ],
        [
            "url" => "#",
            "icon-services" => "4-penanganan.png",
            "services-title" => "Penanganan Bahan Beracun",
            "services-subtitle" => "Sed do elusm ad tempor"
        ],
    ];

    private static $services_gallery = [
        [
            "url" => "#",
            "image-banner" => "services-01.jpg",
            "gallery-title" => "Response Time",
            "gallery-subtitle" => "Natus error sit voluptatem"
        ],
        [
            "url" => "#",
            "image-banner" => "services-02.jpg",
            "gallery-title" => "Safety Education",
            "gallery-subtitle" => "Natus error sit voluptatem"
        ],
        [
            "url" => "#",
            "image-banner" => "services-03.jpg",
            "gallery-title" => "Alarm Inspection",
            "gallery-subtitle" => "Natus error sit voluptatem"
        ],
        [
            "url" => "#",
            "image-banner" => "services-04.jpg",
            "gallery-title" => "Effective Methods",
            "gallery-subtitle" => "Natus error sit voluptatem"
        ]
    ];

    // Public Function
    public static function herobannerdata()
    {
        // Ambil semua data blog via collection
        return collect(self::$herobanner_items);
    }

    public static function servicesdata()
    {
        return collect(self::$service_items);
    }

    public static function gallerydata()
    {
        return collect(self::$services_gallery);
    }
}
