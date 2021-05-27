<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::created([

        'email'=>'jeovanabagio@gmail.com',
        'password'=> bcrypt('senha12345'),

       ]);
    }
}
