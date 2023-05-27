<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $posts = collect([
           [
               'title' => 'My first post',
               'slug' => 'my-first-post',
               'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
               'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
               'is_published' => true,
               'min_to_read' => 12,
           ],
            [
                'title' => 'My second post',
                'slug' => 'my-second-post',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'is_published' => true,
                'min_to_read' => 20,
            ],
            [
                'title' => 'My third post',
                'slug' => 'my-third-post',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'is_published' => true,
                'min_to_read' => 15,
            ]
        ]);

        $posts->each(function ($post) {
            Post::create([
                'title' => $post['title'],
                'slug' => $post['slug'],
                 'excerpt' => $post['excerpt'],
                 'description' => $post['description'],
                 'is_published' => $post['is_published'],
                 'min_to_read' => $post['min_to_read'],
             ]);
        });

    }
}
