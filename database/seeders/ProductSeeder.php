<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'High performance laptop',
                'price' => 1500.00,
                'image_url' => 'https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone',
                'price' => 800.50,
                'image_url' => 'https://images.unsplash.com/photo-1634403665443-81dc4d75843a?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Headphones',
                'description' => 'Noise cancelling headphones',
                'price' => 200.00,
                'image_url' => 'https://plus.unsplash.com/premium_photo-1679513691474-73102089c117?q=80&w=813&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Keyboard',
                'description' => 'Mechanical keyboard',
                'price' => 50.00,
                'image_url' => 'https://images.unsplash.com/photo-1602025882379-e01cf08baa51?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Monitor',
                'description' => 'Full HD 24-inch monitor',
                'price' => 300.00,
                'image_url' => 'https://plus.unsplash.com/premium_photo-1680721575441-18d5a0567269?q=80&w=804&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ]
        ]);
    }
}
