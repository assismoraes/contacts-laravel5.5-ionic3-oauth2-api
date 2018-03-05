<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'slEkgsH9pDoPV3xqy5u329n3ZOmYQSNZ2MRLcUTk',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2018-03-05 12:52:50',
                'updated_at' => '2018-03-05 12:52:50',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => '7gYmdtXDrU0Y4qW9FoHm1jYEFIoxhgVUBb4v9pqJ',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2018-03-05 12:52:50',
                'updated_at' => '2018-03-05 12:52:50',
            ),
        ));
        
        
    }
}