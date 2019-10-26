<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_id' => 1,
                'city' => 'Odessa',
                'street' => 'deribasovskaya',
                'house_no' => '1',
                'entrance' => 1,
                'doorphone' => '123',
                'floor' => 2,
                'is_default' => 1,
                'extra' => NULL,
            ),
        ));
        
        
    }
}