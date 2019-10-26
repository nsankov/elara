<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'test',
                'type' => 'image',
                'unit' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'test2',
                'type' => 'default',
                'unit' => NULL,
            ),
        ));
        
        
    }
}