<?php

use Illuminate\Database\Seeder;

class CatalogItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_items')->delete();
        
        \DB::table('catalog_items')->insert(array (
            0 => 
            array (
                'catalog_id' => 1,
                'product_id' => 1,
                'sort' => 1,
            ),
            1 => 
            array (
                'catalog_id' => 1,
                'product_id' => 2,
                'sort' => 2,
            ),
        ));
        
        
    }
}