<?php

namespace Database\Seeders;

use App\Models\Sysparam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SysparamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sysparam::create([
            'nama' => 'about-short',
            'value' => 'PSM UI Paragita adalah wadah bagi Mahasiswa UI yang sangat mengedepankan mutu dan kualitas dalam mengembangkan minat dan bakat di bidang berpaduan suara. '
        ]);

        Sysparam::create([
            'nama' => 'achievements',
            'value' => '128+'
        ]);

        Sysparam::create([
            'nama' => 'countries',
            'value' => '6+'
        ]);

        Sysparam::create([
            'nama' => 'costumes',
            'value' => '18'
        ]);

        Sysparam::create([
            'nama' => 'coaches',
            'value' => '2'
        ]);

        Sysparam::create([
            'nama' => 'choir-members',
            'value' => '52'
        ]);
    }
}
