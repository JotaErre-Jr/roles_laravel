<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@sys.com',
            //senha encriptada
            'password' => bcrypt('123456789')

        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@sys.com',
            //senha encriptada
            'password' => bcrypt('123456789')

        ]);
    }
}
