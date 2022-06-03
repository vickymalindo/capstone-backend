<?php

namespace Database\Seeders;

use App\Laporan;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) { 
            $data = [
                'title' => 'tes judul '. $i,
                'description' => 'tes deskripsi '. $i,
                'location' => 'tes lokasi '. $i,
            ];
    
            Laporan::create($data);
        }
    }
}
