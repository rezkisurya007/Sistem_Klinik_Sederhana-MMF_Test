<?php

use Illuminate\Database\Seeder;
use App\tindakan;
use Carbon\Carbon;

class tindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tindakan::insert([
            [
                'nama' => 'periksa mata',
                'harga' => 2000,
               
                'created_at' => Carbon::now()                
            ],
            [
                'nama' => 'periksa kaki',
                'harga' => 3000,
                
                'created_at' => Carbon::now()                
            ],
           
            
           
            
        ]);
    }
}
