<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::table('users')->insert([
            'name'=>'sushant',
            "email"=>"sussu@gmail.com",
            "password"=>Hash::make('12345')

        ]);
    }
}
