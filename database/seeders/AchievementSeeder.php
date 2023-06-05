<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 1,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 1,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 2,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 3,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 3,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 4,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 5,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 6,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional, 5 Besar Pesparawi Mahasiswa Nasional, 2 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 7,
            'foto' => 'achievement.png'
        ]);

        Achievement::create([
            'judul' => 'The 10th International Brawijaya Choir Festival ',
            'deskripsi' => '10 Besar Pesparawi Mahasiswa Nasional, 5 Besar Pesparawi Mahasiswa Nasional',
            'year_id' => 7,
            'foto' => 'achievement.png'
        ]);
    }
}
