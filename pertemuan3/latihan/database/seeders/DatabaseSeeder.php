<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 5 users
        User::factory(5)->create();

        // 2 categories
        Category::factory(2)->create();

        // 10 posts (pakai relasi user & category yang sudah ada)
        Post::factory(10)
            ->recycle(User::all())
            ->recycle(Category::all())
            ->create();
    }
}
