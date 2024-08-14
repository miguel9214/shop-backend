<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 29.99,
            'stock' => 100,
            'image' => 'https://example.com/images/product1.jpg',
            'category_id' => 2, // Suponiendo que es un campo de texto
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 49.99,
            'stock' => 50,
            'image' => 'https://example.com/images/product2.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Product 3',
            'description' => 'Description for Product 3',
            'price' => 99.99,
            'stock' => 25,
            'image' => 'https://example.com/images/product3.jpg',
            'category_id' => 3,
        ]);
    }
}
