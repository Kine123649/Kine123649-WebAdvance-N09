<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create posts and associate them with existing users
        Post::factory()->count(10)->create([
            'user_id' => User::inRandomOrder()->first()->id, // Randomly assign a user to each post
        ]);
    }
}
