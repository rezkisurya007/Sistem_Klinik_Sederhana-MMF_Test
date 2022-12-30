<?php

use Illuminate\Database\Seeder;
use App\obat;
use Carbon\Carbon;


class obatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        obat::insert([
            [
                'name' => 'mixagrip',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'panadol',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'bodrex',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'paramex',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'decolgen',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'sanmol',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'obh',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            [
                'name' => 'antagin',
                'stok' => 100,
                'harga' => 5000,
                'satuan' => 'pcs',
                'created_at' => Carbon::now()                
            ],
            
           
            
        ]);
    }
}
