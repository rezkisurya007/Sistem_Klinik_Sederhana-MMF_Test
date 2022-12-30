<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(obatSeeder::class);
        $this->call(tindakanSeeder::class);
        $this->call(dokterSeeder::class);
        $this->call(pasienSeeder::class);
       

        // $this->call(UsersTableSeeder::class);
    }
}
