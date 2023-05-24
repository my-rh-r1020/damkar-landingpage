<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Profile extends Model
// {
//     use HasFactory;
// }

class Profile
{
    // Private
    private static $regu_danru = [
        [
            "regu" => "Regu 1 - Pos Damkar Suka Berenang",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "AGUS ALFIAN"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "R.FIRMANSYAH"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "HARYANTO GITARA"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "RIZWAN,S.AK"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "WENDY PRASETYA,SH"
                ]
            ],
        ],
        [
            "regu" => "Regu 2 - Pos Damkar Suka Berenang",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "RUSNI"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "M.REZA SAMUDERA"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "TRI HARTANTO"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "ZULKIFRI JULIANSYAH"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "MANGASAN SITINJAK"
                ]
            ],
        ],
        [
            "regu" => "Regu 3 - Pos Damkar Suka Berenang",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "LABAI NARRIZKI"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "DICKY ZULKARNAENSYAH"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "RADEN HARI SRI WIBOWO,A.Md"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "FEBRIYANTO FRANTOWO"
                ],
            ],
        ],
        [
            "regu" => "Regu 4 - Pos Damkar Dompak",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Benny Saputra"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Jon Hendra"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Sulemi"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "M.Indra Wijaya"
                ],
            ],
        ],
        [
            "regu" => "Regu 5 - Pos Damkar Dompak",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Joko Santoso"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Dani Andriansyah S.Sos"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Dery Alfiandy"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Sabrian Bujatra"
                ],
            ],
        ],
        [
            "regu" => "Regu 6 - Pos Damkar Dompak",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Irlan Lapi"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Musfarudin"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Galih K Sesario S.Pi"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Iswandi"
                ],
            ],
        ],
        [
            "regu" => "Regu 7 - Pos Damkar Bintan Centre",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "M. Zaenudin"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Krisna Ngadiyanto, SE"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Adi Putro Nugroho"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Bandi Aprizal Majid"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Davit"
                ]
            ],
        ],
        [
            "regu" => "Regu 8 - Pos Damkar Bintan Centre",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Nardiansyah"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Rio M.Nur"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "M.Supriyandi"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Didik Rahman"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Yandri Saputra"
                ]
            ],
        ],
        [
            "regu" => "Regu 9 - Pos Damkar Bintan Centre",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Andi Sahputra"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Sumarlin Rivo Tanana"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Aditya Desriandi"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Oka Tama B Prayoga S.Sos"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "M. Syafri Syafruddin"
                ]
            ],
        ],
        [
            "regu" => "Regu 10 - Pos Damkar Senggarang",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Radikha"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Obi Garthia"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "M.Rifai"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Heru Kurniawan"
                ],
            ],
        ],
        [
            "regu" => "Regu 11 - Pos Damkar Senggarang",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Febry"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Joko Sutrisno SE"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Dimas Anggit Prayoga"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Sauqi R Jordan"
                ],
            ],
        ],
        [
            "regu" => "Regu 12 - Pos Damkar Senggarang",
            "anggota" => [
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Asis S.Sos"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Hery Sentosa"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Dimas Andika S.Sos"
                ],
                [
                    "profil-img" => "bg-user.png",
                    "nama" => "Bintang Ardira Candra"
                ],
            ],
        ]
    ];

    // Public
    public static function all()
    {
        // Ambil data dari private collection
        return collect(self::$regu_danru);
    }
}
