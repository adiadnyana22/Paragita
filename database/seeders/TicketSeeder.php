<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
            'tanggal' => '2024-06-04',
            'judul' => 'Anak Jaksel: The Musical!',
            'deskripsi' => 'Drama Musikal diproduksi oleh Yasmara Creation, mengangkat nostalgia dibumbui komedi, persahabatan, romansa, kritik sosial dan penampilan spesial oleh Ten2Five.',
            'foto' => 'ticket1.png',
            'link' => 'https://www.tiket.com/to-do/tiket-attraction-dunia-fantasi-ancol'
        ]);

        Ticket::create([
            'tanggal' => '2024-06-04',
            'judul' => 'Anak Jaksel: The Musical!',
            'deskripsi' => 'Drama Musikal diproduksi oleh Yasmara Creation, mengangkat nostalgia dibumbui komedi, persahabatan, romansa, kritik sosial dan penampilan spesial oleh Ten2Five.',
            'foto' => 'ticket2.png'
        ]);

        Ticket::create([
            'tanggal' => '2024-06-04',
            'judul' => 'Anak Jaksel: The Musical!',
            'deskripsi' => 'Drama Musikal diproduksi oleh Yasmara Creation, mengangkat nostalgia dibumbui komedi, persahabatan, romansa, kritik sosial dan penampilan spesial oleh Ten2Five.',
            'foto' => 'ticket3.png'
        ]);

        Ticket::create([
            'tanggal' => '2024-06-04',
            'judul' => 'Anak Jaksel: The Musical!',
            'deskripsi' => 'Drama Musikal diproduksi oleh Yasmara Creation, mengangkat nostalgia dibumbui komedi, persahabatan, romansa, kritik sosial dan penampilan spesial oleh Ten2Five.',
            'foto' => 'ticket4.png'
        ]);
    }
}
