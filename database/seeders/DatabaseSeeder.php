<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create();
         Post::factory(10)->create();
         Category::factory(6)->create();
//         \App\Models\Post::create([
//             'name' => 'Test User',
//             'image' => 'om',
//             'price' => '1000',
//             'description' => 'om',
//             'category_id' => '1',
//         ]);
    }
}
