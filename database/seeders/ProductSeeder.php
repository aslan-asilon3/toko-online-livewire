<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Product;

class ProductSeeder extends Seeder
{

    public function run()
    {
        //
        Product::factory()->count(20)->create();
    }
}
