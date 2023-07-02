<?php

namespace Database\Seeders;

// Model
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'role_id' => 2,
            'name' => 'Admin Disdamkarmat',
            'avatar' => 'bg-user.png',
            'email' => 'damkar.penyelamatan.tpi@gmail.com',
            'password' => bcrypt('admin1'),
        ]);
    }
}
