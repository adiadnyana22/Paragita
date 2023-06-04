<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::create([
           'nama' => '2010'
        ]);

        Year::create([
            'nama' => '2012'
        ]);

        Year::create([
            'nama' => '2013'
        ]);

        Year::create([
            'nama' => '2014'
        ]);

        Year::create([
            'nama' => '2018'
        ]);

        Year::create([
            'nama' => '2020'
        ]);

        Year::create([
            'nama' => '2022'
        ]);
    }
}
