<?php

use App\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'email'=>'jeovanabagio@gmail.com',
            'name'=>'jeovana',
            'password'=> bcrypt('senha12345'),
    
           ]);
    }
}
