<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => 'SkydoveID',
                'title' => 'Digital Agency',
                'description' => 'Skydove is a digital production house based in East Java, specializing in creative branding and design services. We offer expertise in corporate branding, event design, food photography, and more.',
                'social' => [
                    'blog' => 'https://johndoe.blog',
                    'twitter' => 'johndoe',
                    'instagram' => 'john.doe',
                    'github' => 'johndoe',
                ],
            ],
            [
                'name' => 'Xagyshop',
                'title' => 'E-commerce Game Store',
                'description' => 'Xagyshop is a leading online retailer of video games, consoles, and accessories. We offer a wide selection of new and pre-owned games at competitive prices.',
                'social' => [
                    'blog' => 'https://janesmith.blog',
                    'twitter' => 'janesmith',
                    'instagram' => 'jane.smith',
                    'github' => 'janesmith',
                ],
            ],
            [
                'name' => 'Artior Studio',
                'title' => 'Design Architecture',
                'description' => 'Artior Studio is a full-service design and architecture firm based in New York City. We specialize in residential and commercial projects, offering a range of services from concept development to construction management.',
                'social' => [
                    'blog' => null,
                    'twitter' => null,
                    'instagram' => 'alice.brown',
                    'github' => 'alicebrown',
                ],
            ],
            [
                'name' => 'Urproject Studio',
                'title' => 'Web Development & IT Consulting',
                'description' => 'Urproject Studio is a web development and IT consulting firm based in San Francisco. We specialize in custom web applications, e-commerce solutions, and digital marketing services.',
                'social' => [
                    'blog' => 'https://johndoe.blog',
                    'twitter' => 'johndoe',
                    'instagram' => 'john.doe',
                    'github' => 'johndoe',
                ],
            ]
        ];

        foreach ($partners as $partner) {
            $nameSlug = strtolower(str_replace(' ', '', $partner['name']));
            $partner['avatar'] = "https://avatar.iran.liara.run/username?username={$nameSlug}";
            $partner['avatar_dark'] = "https://avatar.iran.liara.run/username?username={$nameSlug}";

            // Create partner
            Partner::create($partner);
        }
    }
}
