<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result =  DB::table('categories')->insert([
            ['categoryName' => 'Category 1', 'categoryImg' => 'category1.jpg'],
            ['categoryName' => 'Category 2', 'categoryImg' => 'category2.jpg'],
            ['categoryName' => 'Category 3', 'categoryImg' => 'category3.jpg'],
            ['categoryName' => 'Category 4', 'categoryImg' => 'category4.jpg'],
            ['categoryName' => 'Category 5', 'categoryImg' => 'category5.jpg'],
            ['categoryName' => 'Category 6', 'categoryImg' => 'category6.jpg'],
            ['categoryName' => 'Category 7', 'categoryImg' => 'category7.jpg'],
            ['categoryName' => 'Category 8', 'categoryImg' => 'category8.jpg'],
            ['categoryName' => 'Category 9', 'categoryImg' => 'category9.jpg'],
            ['categoryName' => 'Category 10', 'categoryImg' => 'category10.jpg'],
        ]);
    }
}
