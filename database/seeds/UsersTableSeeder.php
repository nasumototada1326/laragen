<?php

use Illuminate\Database\Seeder;

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
            [
            'name' => 'あああ',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('secret')
            ],[
            'name' => 'いいい',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123')   
            ]
        ]);

    }
}
