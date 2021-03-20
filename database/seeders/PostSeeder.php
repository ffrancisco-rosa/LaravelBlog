<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'slug' => 'first-post',
            'title' => 'First Post',
            'description' => 'Description first post',
            'image_path' => 'test',
            'user_id' => '1'
        ]);
        DB::table('posts')->insert([
            'slug' => 'second-post',
            'title' => 'Second Post',
            'description' => 'Description second post',
            'image_path' => 'test',
            'user_id' => '1'
        ]);
    }
}
