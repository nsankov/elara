<?php

use Illuminate\Database\Seeder;

class ProductFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_features')->delete();
        
        \DB::table('product_features')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'feature_id' => 1,
                'value' => 'test_val1',
            ),
            1 => 
            array (
                'product_id' => 1,
                'feature_id' => 2,
                'value' => 'test_val2',
            ),
        ));
        
        
    }
}