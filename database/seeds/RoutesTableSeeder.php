<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('routes')->delete();

        \DB::table('routes')->insert(array (
            1 =>
            array (
                'id' => 2,
                'page_type' => 'category',
                'category_id' => 1,
                'product_id' => NULL,
                'static_page_id' => NULL,
                'catalog_id' => NULL,
                'path' => 'testcat',
                'title' => 'test category',
                'keywords' => NULL,
                'description' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'page_type' => 'product',
                'category_id' => NULL,
                'product_id' => 1,
                'static_page_id' => NULL,
                'catalog_id' => NULL,
                'path' => 'prod',
                'title' => NULL,
                'keywords' => NULL,
                'description' => NULL,
            ),
        ));


    }
}
