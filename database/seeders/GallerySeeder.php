<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'foto' => 'gallery3.png',
        ]);

        Gallery::create([
            'foto' => 'gallery2.png',
        ]);

        Gallery::create([
            'foto' => 'gallery1.png',
        ]);

        Gallery::create([
            'foto' => 'gallery4.png',
        ]);

        Gallery::create([
            'foto' => 'gallery5.png',
        ]);

        Gallery::create([
            'foto' => 'gallery6.png',
        ]);

        Gallery::create([
            'foto' => 'gallery7.png',
        ]);

        Gallery::create([
            'foto' => 'gallery8.png',
        ]);

        Gallery::create([
            'foto' => 'gallery9.png',
        ]);

        Gallery::create([
            'foto' => 'gallery10.png',
        ]);
    }
}
