<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_reviews extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result =   DB::table('product_reviews')->insert([
            ['description' => 'Great product, highly recommend!', 'email' => 'user1@example.com', 'product_id' => '101'],
            ['description' => 'Not bad, but could be better.', 'email' => 'user2@example.com', 'product_id' => '102'],
            ['description' => 'The quality is amazing, worth every penny.', 'email' => 'user3@example.com', 'product_id' => '103'],
            ['description' => 'Terrible, didn’t meet expectations.', 'email' => 'user4@example.com', 'product_id' => '104'],
            ['description' => 'Good value for the price, decent quality.', 'email' => 'user5@example.com', 'product_id' => '105'],
            ['description' => 'Just as described, would buy again!', 'email' => 'user6@example.com', 'product_id' => '106'],
            ['description' => 'Poor quality, doesn’t work as expected.', 'email' => 'user7@example.com', 'product_id' => '107'],
            ['description' => 'Very satisfied, exceeds my expectations.', 'email' => 'user8@example.com', 'product_id' => '108'],
            ['description' => 'Not worth the price, very disappointed.', 'email' => 'user9@example.com', 'product_id' => '109'],
            ['description' => 'Fantastic product, I love it!', 'email' => 'user10@example.com', 'product_id' => '110'],
        ]);
    }
}
