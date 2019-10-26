<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_statuses')->delete();
        
        \DB::table('order_statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'New',
                'is_complete' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Processing',
                'is_complete' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Declined',
                'is_complete' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Complete',
                'is_complete' => 1,
            ),
        ));
        
        
    }
}