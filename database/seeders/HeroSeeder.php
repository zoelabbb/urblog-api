<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Hero::create([
            'title' => 'Hello, Hunters!',
            'subTitle' => 'I\'m Alif Ryuu, founder of Urproject Studio, a backend developer...',
            'primaryBtn' => 'Explore Posts',
            'primaryBtnURL' => '/posts',
            'src' => 'https://www.news.urproject.my.id/assets/smile-peace-icon.Dny-fU0N_Z2vAHY.avif',
            'alt' => 'Alif Ryuu\'s blog'
        ]);
    }
}
