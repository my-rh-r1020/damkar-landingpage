<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'banner' => 'herobanner-1.jpg',
            'instansi' => 'Dinas Pemadam Kebakaran dan Penyelamatan Kota Tanjungpinang',
            'tagline' => 'Pantang Pulang Sebelum Padam'
        ]);
        Banner::create([
            'banner' => 'herobanner-2.jpg',
            'instansi' => 'Dinas Pemadam Kebakaran dan Penyelamatan Kota Tanjungpinang',
            'tagline' => 'Waspada Penyebab Kebakaran'
        ]);
        Banner::create([
            'banner' => 'herobanner-3.jpg',
            'instansi' => 'Dinas Pemadam Kebakaran dan Penyelamatan Kota Tanjungpinang',
            'tagline' => 'STOP Membakar Lahan'
        ]);
    }
}
