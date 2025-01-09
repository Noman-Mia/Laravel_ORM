<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_sliders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result =  DB::table('product_sliders')->insert([
            ['title' => 'Slider 1', 'short_des' => 'Short description 1', 'product_id' => '101'],
            ['title' => 'Slider 2', 'short_des' => 'Short description 2', 'product_id' => '102'],
            ['title' => 'Slider 3', 'short_des' => 'Short description 3', 'product_id' => '103'],
            ['title' => 'Slider 4', 'short_des' => 'Short description 4', 'product_id' => '104'],
            ['title' => 'Slider 5', 'short_des' => 'Short description 5', 'product_id' => '105'],
            ['title' => 'Slider 6', 'short_des' => 'Short description 6', 'product_id' => '106'],
            ['title' => 'Slider 7', 'short_des' => 'Short description 7', 'product_id' => '107'],
            ['title' => 'Slider 8', 'short_des' => 'Short description 8', 'product_id' => '108'],
            ['title' => 'Slider 9', 'short_des' => 'Short description 9', 'product_id' => '109'],
            ['title' => 'Slider 10', 'short_des' => 'Short description 10', 'product_id' => '110'],
        ]);
    }
}
