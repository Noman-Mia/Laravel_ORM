<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_wishes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('product_wishes')->insert([
            ['email' => 'user1@example.com', 'product_id' => '101'],
            ['email' => 'user2@example.com', 'product_id' => '102'],
            ['email' => 'user3@example.com', 'product_id' => '103'],
            ['email' => 'user4@example.com', 'product_id' => '104'],
            ['email' => 'user5@example.com', 'product_id' => '105'],
            ['email' => 'user6@example.com', 'product_id' => '106'],
            ['email' => 'user7@example.com', 'product_id' => '107'],
            ['email' => 'user8@example.com', 'product_id' => '108'],
            ['email' => 'user9@example.com', 'product_id' => '109'],
            ['email' => 'user10@example.com', 'product_id' => '110'],
        ]);
        
    }
}
