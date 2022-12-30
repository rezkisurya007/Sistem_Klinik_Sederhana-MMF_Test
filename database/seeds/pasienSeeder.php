<?php

use Illuminate\Database\Seeder;
use App\pasien;
use Carbon\Carbon;

class pasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pasien::insert([
            [
                'nama' => 'dwiki',
                'alamat' => 'jln danau kerinci',
                'tanggal_lahir' => '21-09-1999',
                'no_handphone' => '0832342425',
                'nik' => 324252,
                'created_at' => Carbon::now()                
            ],
            [
                'nama' => 'hakim',
                'alamat' => 'jln danau kerinci',
                'tanggal_lahir' => '21-09-1999',
                'no_handphone' => '08323242425',
                'nik' => 324342,
                'created_at' => Carbon::now()                
            ],
           
            
           
            
        ]);
    }
}
