<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_carts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_carts')->insert([
            ['email' => 'user1@example.com', 'product_id' => '101', 'color' => 'Red', 'size' => 'L'],
            ['email' => 'user2@example.com', 'product_id' => '102', 'color' => 'Blue', 'size' => 'M'],
            ['email' => 'user3@example.com', 'product_id' => '103', 'color' => 'Green', 'size' => 'S'],
            ['email' => 'user4@example.com', 'product_id' => '104', 'color' => 'Yellow', 'size' => 'XL'],
            ['email' => 'user5@example.com', 'product_id' => '105', 'color' => 'Black', 'size' => 'L'],
            ['email' => 'user6@example.com', 'product_id' => '106', 'color' => 'White', 'size' => 'M'],
            ['email' => 'user7@example.com', 'product_id' => '107', 'color' => 'Pink', 'size' => 'S'],
            ['email' => 'user8@example.com', 'product_id' => '108', 'color' => 'Brown', 'size' => 'XL'],
            ['email' => 'user9@example.com', 'product_id' => '109', 'color' => 'Gray', 'size' => 'L'],
            ['email' => 'user10@example.com', 'product_id' => '110', 'color' => 'Orange', 'size' => 'M'],
        ]);
    }
}
