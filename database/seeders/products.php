<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result =  DB::table('products')->insert([
            ['title' => 'Product 1', 'short_des' => 'Short description 1', 'price' => 1000, 'discount' => 10, 'discount_price' => 900, 'stock' => 50, 'star' => 4.5, 'remark' => 'Remark 1', 'brandId' => 1],
            ['title' => 'Product 2', 'short_des' => 'Short description 2', 'price' => 1200, 'discount' => 15, 'discount_price' => 1020, 'stock' => 60, 'star' => 4.0, 'remark' => 'Remark 2', 'brandId' => 2],
            ['title' => 'Product 3', 'short_des' => 'Short description 3', 'price' => 800, 'discount' => 5, 'discount_price' => 760, 'stock' => 40, 'star' => 3.5, 'remark' => 'Remark 3', 'brandId' => 3],
            ['title' => 'Product 4', 'short_des' => 'Short description 4', 'price' => 1500, 'discount' => 20, 'discount_price' => 1200, 'stock' => 70, 'star' => 4.8, 'remark' => 'Remark 4', 'brandId' => 4],
            ['title' => 'Product 5', 'short_des' => 'Short description 5', 'price' => 2000, 'discount' => 10, 'discount_price' => 1800, 'stock' => 30, 'star' => 5.0, 'remark' => 'Remark 5', 'brandId' => 5],
            ['title' => 'Product 6', 'short_des' => 'Short description 6', 'price' => 950, 'discount' => 15, 'discount_price' => 807, 'stock' => 60, 'star' => 4.3, 'remark' => 'Remark 6', 'brandId' => 6],
            ['title' => 'Product 7', 'short_des' => 'Short description 7', 'price' => 1300, 'discount' => 25, 'discount_price' => 975, 'stock' => 80, 'star' => 3.8, 'remark' => 'Remark 7', 'brandId' => 7],
            ['title' => 'Product 8', 'short_des' => 'Short description 8', 'price' => 1100, 'discount' => 10, 'discount_price' => 990, 'stock' => 90, 'star' => 4.1, 'remark' => 'Remark 8', 'brandId' => 8],
            ['title' => 'Product 9', 'short_des' => 'Short description 9', 'price' => 850, 'discount' => 20, 'discount_price' => 680, 'stock' => 50, 'star' => 4.6, 'remark' => 'Remark 9', 'brandId' => 9],
            ['title' => 'Product 10', 'short_des' => 'Short description 10', 'price' => 1400, 'discount' => 30, 'discount_price' => 980, 'stock' => 40, 'star' => 4.7, 'remark' => 'Remark 10', 'brandId' => 10],
        ]);
    }
}
