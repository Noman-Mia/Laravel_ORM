<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_details extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_details')->insert([
            ['img1' => 'img1a.jpg', 'img2' => 'img2a.jpg', 'img3' => 'img3a.jpg', 'img4' => 'img4a.jpg', 'des' => 'Description 1', 'color' => 'Red', 'size' => 'L', 'product_id' => 1],
            ['img1' => 'img1b.jpg', 'img2' => 'img2b.jpg', 'img3' => 'img3b.jpg', 'img4' => 'img4b.jpg', 'des' => 'Description 2', 'color' => 'Blue', 'size' => 'M', 'product_id' => 2],
            ['img1' => 'img1c.jpg', 'img2' => 'img2c.jpg', 'img3' => 'img3c.jpg', 'img4' => 'img4c.jpg', 'des' => 'Description 3', 'color' => 'Green', 'size' => 'S', 'product_id' => 3],
            ['img1' => 'img1d.jpg', 'img2' => 'img2d.jpg', 'img3' => 'img3d.jpg', 'img4' => 'img4d.jpg', 'des' => 'Description 4', 'color' => 'Yellow', 'size' => 'XL', 'product_id' => 4],
            ['img1' => 'img1e.jpg', 'img2' => 'img2e.jpg', 'img3' => 'img3e.jpg', 'img4' => 'img4e.jpg', 'des' => 'Description 5', 'color' => 'Black', 'size' => 'L', 'product_id' => 5],
            ['img1' => 'img1f.jpg', 'img2' => 'img2f.jpg', 'img3' => 'img3f.jpg', 'img4' => 'img4f.jpg', 'des' => 'Description 6', 'color' => 'White', 'size' => 'M', 'product_id' => 6],
            ['img1' => 'img1g.jpg', 'img2' => 'img2g.jpg', 'img3' => 'img3g.jpg', 'img4' => 'img4g.jpg', 'des' => 'Description 7', 'color' => 'Pink', 'size' => 'S', 'product_id' => 7],
            ['img1' => 'img1h.jpg', 'img2' => 'img2h.jpg', 'img3' => 'img3h.jpg', 'img4' => 'img4h.jpg', 'des' => 'Description 8', 'color' => 'Brown', 'size' => 'XL', 'product_id' => 8],
            ['img1' => 'img1i.jpg', 'img2' => 'img2i.jpg', 'img3' => 'img3i.jpg', 'img4' => 'img4i.jpg', 'des' => 'Description 9', 'color' => 'Gray', 'size' => 'L', 'product_id' => 9],
            ['img1' => 'img1j.jpg', 'img2' => 'img2j.jpg', 'img3' => 'img3j.jpg', 'img4' => 'img4j.jpg', 'des' => 'Description 10', 'color' => 'Orange', 'size' => 'M', 'product_id' => 10],
        ]);
    }
}
