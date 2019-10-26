<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_id' => 1,
                'data' => '"[\\"products\\" => [[\'id\' => 1, \'name\' => \\"Prodname\\", \\"price\\" => 90, qty => 2]], \\"shipping\\" => [\'id\' => 1, \\"name\\" => \\"Std Post\\", \\"price\\" => 10], \\"address\\" => [\\"city\\" => \\"Odessa\\", \\"street\\"=>\\"Deribasovskaya\\",\\"house_no\\" => 1] ]"',
                'status_id' => 1,
            ),
        ));
        
        
    }
}