<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Information;
use App\Models\Role;
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

        User::create([
            'name' => 'unValidateContributor',
            'username' => 'otwvalidatecontributor',
            'contributor' => 'false',
            'role_id' => 2,
            'email' => 'cont@gmail.com',
            'password' => bcrypt('contributor')
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

        Role::create([
            'name' => 'Common'
        ]);
        Role::create([
            'name' => 'Contributor'
        ]);
        Role::create([
            'name' => 'Admin'
        ]);
    }
}
