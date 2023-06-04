<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            'foto' => 'carousel1.png',
        ]);

        Carousel::create([
            'foto' => 'carousel1.png',
        ]);

        Carousel::create([
            'foto' => 'carousel1.png',
        ]);

        Carousel::create([
            'foto' => 'carousel1.png',
        ]);
    }
}
