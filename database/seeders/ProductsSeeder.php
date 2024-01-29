<?php

namespace Database\Seeders;

use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::truncate();
        ProductImages::truncate();
        Products::factory()->count(100)->create();
        ProductImages::factory()->count(200)->create();
    }
}
