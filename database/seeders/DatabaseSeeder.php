<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Information;
use App\Models\User;
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
            'name' => 'Admin',
            'username' => 'admin',
            'role_id' => 3,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olagraga'
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);

        User::factory(5)->create();
        Article::factory(3)->create();
        Information::factory(5)->create();
    }
}
