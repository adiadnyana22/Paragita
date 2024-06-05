<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Label::create([
            'nama' => 'Anak Jaksel: The Musikal!'
        ]);

        Label::create([
            'nama' => 'Anak Jakpus: The Musikal!'
        ]);

        Label::create([
            'nama' => 'Anak Jakbar: The Musikal!'
        ]);

        Label::create([
            'nama' => 'Anak Jaktim: The Musikal!'
        ]);

        Label::create([
            'nama' => 'Anak Jakut: The Musikal!'
        ]);
    }
}
