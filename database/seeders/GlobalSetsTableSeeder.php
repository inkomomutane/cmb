<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlobalSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('global_sets')->delete();
        
        \DB::table('global_sets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'handle' => 'cmb',
                'title' => 'cmb',
                'settings' => '[]',
                'created_at' => '2023-08-28 12:09:34',
                'updated_at' => '2023-08-28 12:09:34',
            ),
        ));
        
        
    }
}