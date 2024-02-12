<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Dimitar',
            'email' => 'dimitarzlatev02@gmail.com',
            'password' => 'admin'
        ]);

        Product::factory()->create([
            'title' => 'Product 1',
            'description' => 'Description 1',
            'price' => 19.99,
        ]);

        Product::factory()->create([
            'title' => 'Product 2',
            'description' => 'Description 2',
            'price' => 19.99,
        ]);
    }
}
