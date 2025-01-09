<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class profiles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            ['name' => 'John Doe', 'city' => 'New York'],
            ['name' => 'Jane Smith', 'city' => 'Los Angeles'],
            ['name' => 'Michael Brown', 'city' => 'Chicago'],
            ['name' => 'Emily Davis', 'city' => 'Houston'],
            ['name' => 'David Martinez', 'city' => 'Miami'],
            ['name' => 'Sophia Garcia', 'city' => 'Dallas'],
            ['name' => 'William Wilson', 'city' => 'Seattle'],
            ['name' => 'Olivia Lopez', 'city' => 'San Francisco'],
            ['name' => 'James Taylor', 'city' => 'Boston'],
            ['name' => 'Charlotte Anderson', 'city' => 'Atlanta'],
        ]);
        
        
        
    }
}
