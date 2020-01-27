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
                'name' => 'hj',
                'email' => 'hj@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.C.I9NYDuhPI0Vwy0gmwyO1fKvmPo8aSQiZkYJfvV8pVabrJBEyXi',
                'remember_token' => NULL,
                'created_at' => '2019-10-22 09:26:27',
                'updated_at' => '2019-10-22 09:26:27',
                'level' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0LjFKmDr1tQiLMKS50HRD.1SJ8arCG06qdh5j6bshV5a1baOHV7Ki',
                'remember_token' => NULL,
                'created_at' => '2019-10-22 09:28:28',
                'updated_at' => '2019-10-22 09:28:28',
                'level' => '1',
            ),
        ));
        
        
    }
}
