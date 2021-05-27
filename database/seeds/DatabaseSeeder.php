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
        User::create(['name'=> 'usuariopadrao' ,'email' => "usuario@gmail.com", 'password' => Hash::make('senha123')]);
    }
}
