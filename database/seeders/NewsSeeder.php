<?php

namespace Database\Seeders;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'judul' => 'The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing',
            'isi' => 'lorem',
            'tanggal' => '2023-06-03',
            'foto' => 'news1.png'
        ]);

        News::create([
            'judul' => 'The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing',
            'isi' => 'lorem',
            'tanggal' => '2023-06-03',
            'foto' => 'news2.png'
        ]);

        News::create([
            'judul' => 'The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing',
            'isi' => 'lorem',
            'tanggal' => '2023-06-03',
            'foto' => 'news3.png'
        ]);
    }
}
