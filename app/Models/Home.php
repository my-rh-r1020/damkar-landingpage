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

    // Public Function
    public static function servicesdata()
    {
        // Ambil semua data blog via collection
        return collect(self::$service_items);
    }
}
