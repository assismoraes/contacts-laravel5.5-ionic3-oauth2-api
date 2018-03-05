<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Assis Moraes',
                'email' => 'assis_fest@live.it',
                'password' => '$2y$10$cfxCpkjeZ0SQsOoBLSHBf.zPjJrLbdeCaa7PA3zDpZvZP9s/gtUSm',
                'remember_token' => 'NQdPlVsHvQVJORFoEWcP7EPqYknS5XBADq5GgCRTNwl3sA7yKYTEAVbAoOfx',
                'created_at' => '2018-03-05 12:15:46',
                'updated_at' => '2018-03-05 12:15:46',
            ),
        ));
        
        
    }
}