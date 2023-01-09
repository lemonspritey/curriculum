<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'UserName',
            'email' => 'User@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'UserName2',
            'email' => 'Use2r@mailaddress.com',
            'password' => bcrypt('password2'),
        ]);
        DB::table('users')->insert([
            'name' => 'UserName3',
            'email' => 'User3@mailaddress.com',
            'password' => bcrypt('password3'),
        ]);
    }
}
