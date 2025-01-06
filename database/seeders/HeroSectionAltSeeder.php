<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSectionAlt;

class HeroSectionAltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSectionAlt::create([
            'title' => 'Follow me on GitHub',
            'subTitle' => 'I love open source and have some small tools on my GitHub. You can get me more by checking out my code',
            'btnTitle' => 'Follow me',
            'url' => 'https://github.com/zoelabbb',
        ]);
    }
}
