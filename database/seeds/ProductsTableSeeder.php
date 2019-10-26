<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'manufacturer_id' => 1,
                'name' => 'test',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suscipit tellus mauris a diam maecenas sed. Amet justo donec enim diam vulputate ut pharetra sit. Sed faucibus turpis in eu mi bibendum. ',
                'sku' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'manufacturer_id' => NULL,
                'name' => 'title',
                'description' => 'description',
                'sku' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}