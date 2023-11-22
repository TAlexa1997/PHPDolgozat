<?php

namespace Database\Factories;

use App\Models\Product_type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => Product_type::all()->random()->type_id,
            'date' => fake()-> date(),
        ];
    }
}
