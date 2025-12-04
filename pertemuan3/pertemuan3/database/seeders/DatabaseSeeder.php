<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            // Create 5 Users
            $users = [];
            for ($i = 1; $i <= 5; $i++) {
                $user = User::create([
                    'name' => 'User ' . $i,
                    'username' => 'user' . $i,
                    'email' => 'user' . $i . '@example.com',
                    'password' => bcrypt('password'),
                ]);
                $users[] = $user;
                echo "Created user: {$user->name}\n";
            }

            // Create 2 Categories
            $categories = [];
            $tech = Category::create(['name' => 'Technology']);
            $categories[] = $tech;
            echo "Created category: {$tech->name}\n";
            
            $life = Category::create(['name' => 'Lifestyle']);
            $categories[] = $life;
            echo "Created category: {$life->name}\n";

            // Create 10 Posts
            $postTitles = [
                'Getting Started with Laravel',
                'Tailwind CSS Tips & Tricks',
                'Web Development Best Practices',
                'Modern Frontend Development',
                'Database Design Fundamentals',
                'API Development with Laravel',
                'JavaScript Async/Await',
                'Vue.js Performance Tips',
                'Git Workflow Best Practices',
                'Docker for Web Developers'
            ];

            for ($i = 0; $i < 10; $i++) {
                $post = Post::create([
                    'user_id' => $users[$i % 5]->id,
                    'category_id' => $categories[$i % 2]->id,
                    'title' => $postTitles[$i],
                    'slug' => Str::slug($postTitles[$i]),
                    'excerpt' => 'This is an excerpt for ' . $postTitles[$i],
                    'body' => 'This is the body content for ' . $postTitles[$i] . '. Lorem ipsum dolor sit amet.',
                    'image' => null,
                ]);
                echo "Created post: {$post->title}\n";
            }
            echo "Seeding completed successfully!\n";
        } catch (\Exception $e) {
            echo "Error during seeding: " . $e->getMessage() . "\n";
            throw $e;
        }
    }
}