<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::insert([
            [
                'title' => 'Focus on Backend',
                'description' => 'I am a backend developer with a focus on PHP and Laravel. I have experience in building RESTful APIs and web applications.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bug Hunter',
                'description' => 'I have a passion for finding bugs and fixing them. I have experience in debugging and troubleshooting issues in web applications.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Email',
                'description' => 'zoelabbb@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
