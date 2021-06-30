<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('posts')->insert([
              'title' => 'How to make money',
              'description' => 'Is all about determination',
              'user_id' => 1,
              'status' => 'Pending',
              'created_at' => Carbon::now(),
            ]);
        }
    }
}
