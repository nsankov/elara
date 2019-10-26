<?php

use Illuminate\Database\Seeder;

class ProductPicturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_pictures')->delete();
        
        \DB::table('product_pictures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'file_name' => '1aabac6d068eef6a7bad3fdf50a05cc8.png',
                'width' => 1280,
                'height' => 1024,
                'sort' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'file_name' => 'e2f43259cb63e38b9ed8d2d24af245e9.png',
                'width' => 1280,
                'height' => 1024,
                'sort' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'file_name' => '3923b1252de5b321c3c432af5f0d9cb3.png',
                'width' => 1280,
                'height' => 1024,
                'sort' => 1,
            ),
        ));
        
        
    }
}