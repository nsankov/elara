<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manufacturers')->delete();
        
        \DB::table('manufacturers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Levi\'s',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suscipit tellus mauris a diam maecenas sed. Amet justo donec enim diam vulputate ut pharetra sit. Sed faucibus turpis in eu mi bibendum. ',
            ),
        ));
        
        
    }
}