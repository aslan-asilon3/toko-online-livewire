<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;


class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {


        return [
            //
            'title'         => $this->faker->word(),
            'description'   => $this->faker->text(120),
            'price'         => $this->faker->numberBetween(10000, 100000),
            'image'         => '',
        ];
    }
}
