<?php

namespace Database\Seeders;

use App\Models\Regu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regu::create([
            'nama_regu' => 'Regu 1',
            'lokasi' => 'Pos Damkar Suka Berenang'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 2',
            'lokasi' => 'Pos Damkar Suka Berenang'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 3',
            'lokasi' => 'Pos Damkar Suka Berenang'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 4',
            'lokasi' => 'Pos Damkar Dompak'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 5',
            'lokasi' => 'Pos Damkar Dompak'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 6',
            'lokasi' => 'Pos Damkar Dompak'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 7',
            'lokasi' => 'Pos Damkar Bintan Centre'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 8',
            'lokasi' => 'Pos Damkar Bintan Centre'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 9',
            'lokasi' => 'Pos Damkar Bintan Centre'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 10',
            'lokasi' => 'Pos Damkar Senggarang'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 11',
            'lokasi' => 'Pos Damkar Senggarang'
        ]);
        Regu::create([
            'nama_regu' => 'Regu 12',
            'lokasi' => 'Pos Damkar Senggarang'
        ]);
    }
}
