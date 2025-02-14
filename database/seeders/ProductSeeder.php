<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Product::create([
        "code" => 2314412,
        "name" => "Produk ke-$i",
        "description" => "mantap",
        "quantity" => 200 + $i,
        "price" => 900
            ]);
    }

    Product::create([
        "code" => rand(),
        "name" => Str::random(20),
        "description" => Str::random(15),
        "quantity" => rand(2000, 2024),
        "price" => rand()
    ]);
}}
