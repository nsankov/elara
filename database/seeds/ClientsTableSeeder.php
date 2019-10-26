<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'John',
                'lastname' => 'Doe',
                'surname' => NULL,
                'email' => 'jn@doe.com',
                'phone' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Jane',
                'lastname' => 'Doe',
                'surname' => NULL,
                'email' => 'je@doe.com',
            'phone' => '+38(928)333-22-22',
            ),
        ));
        
        
    }
}