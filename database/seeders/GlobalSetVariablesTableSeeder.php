<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlobalSetVariablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('global_set_variables')->delete();
        
        \DB::table('global_set_variables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'handle' => 'cmb',
                'locale' => 'default',
                'origin' => NULL,
                'data' => '[]',
                'created_at' => '2023-08-28 12:09:34',
                'updated_at' => '2023-08-28 12:09:34',
            ),
        ));
        
        
    }
}