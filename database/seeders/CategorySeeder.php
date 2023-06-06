<?php

namespace Database\Seeders;

// Model
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);

        Category::create([
            'name' => 'Pengetahuan',
            'slug' => 'pengetahuan'
        ]);

        Category::create([
            'name' => 'Himbauan',
            'slug' => 'himbauan'
        ]);
    }
}
