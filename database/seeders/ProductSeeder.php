<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Example Product',
            'description' => 'This is an example product.',
            'price' => 99.99
        ]);
    }
}
