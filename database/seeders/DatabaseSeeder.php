<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call( product_wishes::class);
        $this->call( users::class);
        $this->call( product_carts::class);
        $this->call( product_details::class);
        $this->call( product_sliders::class);
        $this->call( brands::class);
        $this->call( categories ::class);
        $this->call( product_reviews::class);
        $this->call( products::class);
        $this->call( profiles::class);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
