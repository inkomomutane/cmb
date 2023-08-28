<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nelson Alexandre Mutane',
                'email' => 'nelsonmutane@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$I1Y8SciLmvHTgvZJPzkq0u93ShdCnSB3ZKW.xV.DFCgvLyN/C1q7K',
                'remember_token' => NULL,
                'created_at' => '2023-08-28 11:20:00',
                'updated_at' => '2023-08-28 11:20:45',
                'super' => 1,
                'avatar' => NULL,
                'preferences' => NULL,
                'last_login' => '2023-08-28 11:20:25',
            ),
        ));
        
        
    }
}