<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            User::insert([
                [
                    
                   
                    'email' => 'admin@gmail.com',
                    'name' => 'admin',
                    'password' => Hash::make('12341234'),
               
                    
               
    
                    
                ],
               
                
            ]);
        
    }
}
