<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result= DB::table('users')->insert([
            ['email' => 'user1@example.com', 'otp' => '123456'],
            ['email' => 'user2@example.com', 'otp' => '654321'],
            ['email' => 'user3@example.com', 'otp' => '789012'],
            ['email' => 'user4@example.com', 'otp' => '456789'],
            ['email' => 'user5@example.com', 'otp' => '987654'],
            ['email' => 'user6@example.com', 'otp' => '321654'],
            ['email' => 'user7@example.com', 'otp' => '654987'],
            ['email' => 'user8@example.com', 'otp' => '159753'],
            ['email' => 'user9@example.com', 'otp' => '852963'],
            ['email' => 'user10@example.com', 'otp' => '147258'],
         ]);
    }
}
