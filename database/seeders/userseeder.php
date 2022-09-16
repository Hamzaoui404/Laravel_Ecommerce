<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'email'=>"ganaruhhhto@hotmail.com",
           'username'=>"kilowa othmani",
           'password'=>Hash::make('hamza'),
           'telephone'=>'28455621'
        ]
        );
    }
}
