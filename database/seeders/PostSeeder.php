<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Laravel for Beginners',
                'slug' => Str::slug('Laravel for Beginners'),
                'description' => 'A complete guide to get started with Laravel.',
                'category' => 'Laravel',
                'banner' => 'https://via.placeholder.com/600x300',
                'banner2' => null,
                'tags' => json_encode(['Laravel', 'PHP', 'Beginner']),
                'view_count' => 100,
                'selected' => true,
                'keywords' => json_encode(['laravel', 'beginner', 'php']),
                'body' => 'Laravel is a powerful PHP framework used for building web applications. In this article, we will go over the basics of getting started with Laravel... (your article content goes here)',
            ],
            [
                'title' => 'Mastering Tailwind CSS',
                'slug' => Str::slug('Mastering Tailwind CSS'),
                'description' => 'Tips and tricks to become proficient in Tailwind CSS.',
                'category' => 'CSS',
                'banner' => 'https://via.placeholder.com/600x300',
                'banner2' => 'https://via.placeholder.com/600x300',
                'tags' => json_encode(['Tailwind', 'CSS', 'Design']),
                'view_count' => 80,
                'selected' => false,
                'keywords' => json_encode(['tailwind', 'css', 'design']),
                'body' => 'Tailwind CSS is a utility-first CSS framework that provides low-level utility classes to build custom designs. In this article, we will cover how to effectively use Tailwind... (your article content goes here)',
            ],
            [
                'title' => 'Building a REST API with Laravel',
                'slug' => Str::slug('Building a REST API with Laravel'),
                'description' => 'Learn how to create RESTful APIs using Laravel.',
                'category' => 'API',
                'banner' => 'https://via.placeholder.com/600x300',
                'banner2' => null,
                'tags' => json_encode(['API', 'Laravel', 'Backend']),
                'view_count' => 150,
                'selected' => true,
                'keywords' => json_encode(['api', 'laravel', 'rest']),
                'body' => 'In this tutorial, we will learn how to build a REST API using Laravel. We will go through all the steps required to set up routes, controllers, and responses for your API... (your article content goes here)',
            ],
            [
                'title' => 'Deploying Astro on Vercel',
                'slug' => Str::slug('Deploying Astro on Vercel'),
                'description' => 'A step-by-step guide to deploy Astro projects on Vercel.',
                'category' => 'Deployment',
                'banner' => 'https://via.placeholder.com/600x300',
                'banner2' => null,
                'tags' => json_encode(['Astro', 'Vercel', 'Deployment']),
                'view_count' => 60,
                'selected' => false,
                'keywords' => json_encode(['astro', 'vercel', 'deploy']),
                'body' => 'Astro is a modern static site generator that makes it easy to build fast websites. In this guide, we will show you how to deploy an Astro project to Vercel... (your article content goes here)',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
