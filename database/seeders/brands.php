<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class brands extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result =   DB::table('brands')->insert([
            ['brandName' => 'Brand 1', 'brandImg' => 'brand1.jpg'],
            ['brandName' => 'Brand 2', 'brandImg' => 'brand2.jpg'],
            ['brandName' => 'Brand 3', 'brandImg' => 'brand3.jpg'],
            ['brandName' => 'Brand 4', 'brandImg' => 'brand4.jpg'],
            ['brandName' => 'Brand 5', 'brandImg' => 'brand5.jpg'],
            ['brandName' => 'Brand 6', 'brandImg' => 'brand6.jpg'],
            ['brandName' => 'Brand 7', 'brandImg' => 'brand7.jpg'],
            ['brandName' => 'Brand 8', 'brandImg' => 'brand8.jpg'],
            ['brandName' => 'Brand 9', 'brandImg' => 'brand9.jpg'],
            ['brandName' => 'Brand 10', 'brandImg' => 'brand10.jpg'],
        ]);
    }
}
