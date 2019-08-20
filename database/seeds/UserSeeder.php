<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Jon-Luke Diericks',
            'email' => 'jd@thewb.co',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'api_token' => bin2hex(openssl_random_pseudo_bytes(40)),
        ]);
    }
}
