<?php

use Illuminate\Database\Seeder;
use App\dokter;
use Carbon\Carbon;

class dokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dokter::insert([
            [
                'nama' => 'abi',
                'alamat' => 'jalan dewandaru',
                'no_handphone' => '08467456764',
                'gender' => 'Laki-laki',
                'status' => 'umum',

               
                'created_at' => Carbon::now()                
            ],
            [
                'nama' => 'rezki',
                'alamat' => 'jalan hansamu',
                'no_handphone' => '08467456764',
                'gender' => 'Laki-laki',
                'status' => 'umum',

               
                'created_at' => Carbon::now()                
            ],
        ]);
    }
}
