<?php

use Illuminate\Database\Seeder;

class StaticPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('static_pages')->delete();
        
        \DB::table('static_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tpl_name' => 'test',
            ),
            1 => 
            array (
                'id' => 2,
                'tpl_name' => 'about',
            ),
        ));
        
        
    }
}