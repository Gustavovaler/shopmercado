<?php

namespace Database\Seeders;

use App\Models\Product;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $prd1 = Product::create([
            'name' => 'Remera de mujer',
            'description' => "Remera de mujer manga corta", 
            'price' => 20890,
            'qty'   => 20
        ]);
        $prd2 = Product::create([
            'name' => 'Remera de hombre',
            'description' => "Remera de hombre manga corta", 
            'price' => 32000,
            'qty'   => 34
        ]);
        $prd3 = Product::create([
            'name' => 'Short',
            'description' => "Short de Jean para mujer", 
            'price' => 78000,
            'qty'   => 12
        ]);
    }
}
