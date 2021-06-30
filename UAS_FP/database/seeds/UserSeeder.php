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
        DB::table('users')->insert([
            'name' =>'Janah Jackson',
            'email' => 'jonahjacksonj@gmail.com',
            'password' => Hash::make('password'),

            
            // 'role' => 'client',

        ]);
    }
}
