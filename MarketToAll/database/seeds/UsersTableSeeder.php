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
            'role_id'=> '1',
            'name'=>'Redha',
            'username'=>'admin',
            'email'=>'redhakaban@gmail.com',
              'password'=>bcrypt('rootadmin'),
        ]);
        DB::table('users')->insert([
            'role_id'=> '2',
            'name'=>'hayder',
            'username'=>'client',
            'email'=>'rshsoft@hotmail.com',
              'password'=>bcrypt('rootclient'),
        ]);
    }
}
