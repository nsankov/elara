<?php

use Illuminate\Database\Seeder;

class CatalogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalogs')->delete();
        
        \DB::table('catalogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'filter_data' => NULL,
            ),
        ));
        
        
    }
}