<?php

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
        $user = [
            'name' => 'Farhah Annisa',
            'email' => 'annisa@gmail.com',
            'username' => 'annisa',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
        ];

        DB::table('users')->insert($user);
    }
}
