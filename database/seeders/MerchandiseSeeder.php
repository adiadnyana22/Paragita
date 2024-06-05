<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merchandise::create([
            'judul' => 'Mono Yellow',
            'foto' => 'merchandise1.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 1
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 2',
            'foto' => 'merchandise2.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 1
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 3',
            'foto' => 'merchandise3.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 1
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 4',
            'foto' => 'merchandise4.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 2
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 5',
            'foto' => 'merchandise5.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 0,
            'label_id' => 3
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 6',
            'foto' => 'merchandise6.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 4
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 7',
            'foto' => 'merchandise7.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 5
        ]);

        Merchandise::create([
            'judul' => 'Mono Yellow 8',
            'foto' => 'merchandise8.png',
            'deskripsi' => 'Paragita Special Merchandise',
            'harga' => 75000,
            'link' => 'https://www.tokopedia.com/',
            'status' => 1,
            'label_id' => 3
        ]);
    }
}
