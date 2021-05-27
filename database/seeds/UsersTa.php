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
       User::create([

        'email'=>'jeovanabagio@gmail.com',
        'name'=>'jeovana',
        'password'=> Hash::make('senha12345'),

       ]);
    }
}
