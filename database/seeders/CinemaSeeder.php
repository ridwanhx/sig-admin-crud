<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'CGV 23 Paskal',
                'website' => 'https://www.cgv.id/en/schedule/cinema/075',
                'phone' => '02286012777',
                'address' => '23 Paskal Shopping Center, Jl. Pasir Kaliki No.25-27, Kb. Jeruk, Kec. Andir, Kota Bandung, Jawa Barat 40181',
                'city' => 'Bandung',
                'province' => 'Jawa Barat',
                'country' => 'Indonesia',
                'postal_code' => '40181',
                'latitude' => number_format(-6.912800, 8, '.', ''),
                'longitude' => number_format(107.601300, 8, '.', ''),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CGV Paris Van Java',
                'website' => 'https://www.cgv.id/en/schedule/cinema/076',
                'phone' => '02282063588',
                'address' => 'Paris Van Java Resort Lifestyle Place, Jl. Sukajadi No.137-139, Sukajadi, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
                'city' => 'Bandung',
                'province' => 'Jawa Barat',
                'country' => 'Indonesia',
                'postal_code' => '40162',
                'latitude' => number_format(-6.891200, 8, '.', ''),
                'longitude' => number_format(107.589500, 8, '.', ''),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CGV Bandung Indah Plaza',
                'website' => 'https://www.cgv.id/en/schedule/cinema/077',
                'phone' => '0224233131',
                'address' => 'Bandung Indah Plaza, Jl. Merdeka No.56-57, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
                'city' => 'Bandung',
                'province' => 'Jawa Barat',
                'country' => 'Indonesia',
                'postal_code' => '40111',
                'latitude' => number_format(-6.921200, 8, '.', ''),
                'longitude' => number_format(107.609500, 8, '.', ''),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
