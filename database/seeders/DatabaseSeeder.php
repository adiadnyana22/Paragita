<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AchievementSeeder::class,
            CarouselSeeder::class,
            CoachSeeder::class,
            GallerySeeder::class,
            NewsSeeder::class,
            SysparamSeeder::class,
            YearSeeder::class,
            TicketSeeder::class,
            LabelSeeder::class,
            MerchandiseSeeder::class
        ]);

        User::create([
            'name' => 'Adi Adnyana',
            'email' => 'adiadnyana22@gmail.com',
            'password' => Hash::make('adiadnyana')
        ]);

        User::create([
            'name' => 'Admin Paragita',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
    }
}
