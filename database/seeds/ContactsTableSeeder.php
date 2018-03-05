<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'Assis Moraes',
                'email' => 'axmraz@gmail.com',
                'phone' => '994521114',
                'created_at' => '2018-02-04 01:53:03',
                'updated_at' => '2018-02-16 23:39:59',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Mariana Moraes',
                'email' => 'maroca@gmail.com',
                'phone' => '994740123',
                'created_at' => '2018-02-04 03:11:43',
                'updated_at' => '2018-02-23 02:20:24',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Irismar Bida',
                'email' => 'irismarbida@outlook.com',
                'phone' => '999889384',
                'created_at' => '2018-02-04 03:12:15',
                'updated_at' => '2018-02-04 03:12:15',
            ),
            3 => 
            array (
                'id' => 74,
                'name' => 'João Maranhão',
                'email' => 'joaomaranhao5144@gmail.com',
                'phone' => '9918827731',
                'created_at' => '2018-02-15 02:07:14',
                'updated_at' => '2018-02-15 11:13:11',
            ),
            4 => 
            array (
                'id' => 75,
                'name' => 'Karina Souza',
                'email' => 'kakasouza@fakebook.com',
                'phone' => '881998276',
                'created_at' => '2018-02-15 02:07:26',
                'updated_at' => '2018-02-15 02:24:41',
            ),
            5 => 
            array (
                'id' => 77,
                'name' => 'Felipe Daniel',
                'email' => 'felipedanieljr@gmail.com',
                'phone' => '991882763',
                'created_at' => '2018-02-15 02:49:05',
                'updated_at' => '2018-02-17 10:50:48',
            ),
            6 => 
            array (
                'id' => 78,
                'name' => 'Daniela Soares',
                'email' => 'daniso@facebook.com',
                'phone' => '998871620',
                'created_at' => '2018-02-15 02:49:50',
                'updated_at' => '2018-02-15 11:12:13',
            ),
            7 => 
            array (
                'id' => 81,
                'name' => 'GIPE',
                'email' => 'sac@gipe.com',
                'phone' => '33087388',
                'created_at' => '2018-02-15 11:14:54',
                'updated_at' => '2018-02-15 19:53:16',
            ),
            8 => 
            array (
                'id' => 111,
                'name' => 'Nando Ferreira',
                'email' => 'nanf@grama.com',
                'phone' => '998177360',
                'created_at' => '2018-02-15 14:38:11',
                'updated_at' => '2018-02-15 14:39:41',
            ),
            9 => 
            array (
                'id' => 113,
                'name' => 'Tatiana Rafaela',
                'email' => 'tatieafaela@gmail.com',
                'phone' => '991883765',
                'created_at' => '2018-02-15 18:58:06',
                'updated_at' => '2018-02-15 20:47:52',
            ),
            10 => 
            array (
                'id' => 114,
                'name' => 'Karlos Wanderson',
                'email' => 'k_wand516@outlook.com.br',
                'phone' => '918837756',
                'created_at' => '2018-02-15 19:02:54',
                'updated_at' => '2018-03-05 11:40:06',
            ),
            11 => 
            array (
                'id' => 115,
                'name' => 'Gilberto Soares',
                'email' => 'gil_soares@zoho.com',
                'phone' => '918734234',
                'created_at' => '2018-02-15 20:37:08',
                'updated_at' => '2018-02-15 20:49:21',
            ),
            12 => 
            array (
                'id' => 132,
                'name' => 'Ingred Bida Lopes',
                'email' => 'ingredbida@gmail.com',
                'phone' => '994080034',
                'created_at' => '2018-02-17 01:38:51',
                'updated_at' => '2018-02-17 01:39:07',
            ),
            13 => 
            array (
                'id' => 133,
                'name' => 'Emanuel Moraes',
                'email' => 'emanueldimoraes@gmail.com',
                'phone' => '982773776',
                'created_at' => '2018-02-23 02:21:31',
                'updated_at' => '2018-02-23 02:21:31',
            ),
        ));
        
        
    }
}