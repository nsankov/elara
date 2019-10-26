<?php

use Illuminate\Database\Seeder;

class CatalogPicturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_pictures')->delete();
        
        \DB::table('catalog_pictures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'catalog_id' => 1,
                'file_name' => '3ytergbtgi3tibgieirhiu349.png',
                'width' => 128,
                'height' => 1024,
                'sort' => 1,
            ),
        ));
        
        
    }
}