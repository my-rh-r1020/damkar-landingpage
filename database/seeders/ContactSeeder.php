<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'alamat' => 'Jl. Ir. Sutami No. 65 Kota Tanjung Pinang, Kepulauan Riau 29112',
            'tlp' => '0771 - 24949',
            'email' => 'damkar.penyelamatan.tpi@gmail.com',
            'fb_link' => 'https://www.facebook.com/profile.php?id=100064204235419',
            'ig_link' => 'https://www.instagram.com/tanjungpinang.fire/',
            'youtube_link' => 'https://www.youtube.com/@tanjungpinangfire',
            'link_tautan1' => 'https://www.tanjungpinangkota.go.id/'
        ]);
    }
}
