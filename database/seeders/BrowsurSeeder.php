<?php

namespace Database\Seeders;

use App\Models\Browsur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrowsurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Browsur::create([
            'cover' => 'services-01.jpg',
            'judul' => 'Response Time',
            'deskripsi' => 'Respon Yang Cepat'
        ]);
        Browsur::create([
            'cover' => 'services-02.jpg',
            'judul' => 'Safety Education',
            'deskripsi' => 'Edukasi Keselamatan Masyarakat'
        ]);
        Browsur::create([
            'cover' => 'services-03.jpg',
            'judul' => 'Alarm Inspection',
            'deskripsi' => 'Tanggap Terhadap Kebakaran'
        ]);
        Browsur::create([
            'cover' => 'services-04.jpg',
            'judul' => 'Effective Methods',
            'deskripsi' => 'Metode Pemadaman Handal'
        ]);
    }
}
