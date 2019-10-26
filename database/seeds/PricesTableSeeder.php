<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prices')->delete();
        
        \DB::table('prices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'currency_id' => 1,
                'price_value' => 100.0,
                'is_default' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'currency_id' => 1,
                'price_value' => 50.0,
                'is_default' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}