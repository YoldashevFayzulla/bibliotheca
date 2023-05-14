<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create();
//         \App\Models\Post::create([
//             'name' => 'Test User',
//             'image' => 'om',
//             'price' => '1000',
//             'description' => 'om',
//             'category_id' => '1',
//         ]);
    }
}
