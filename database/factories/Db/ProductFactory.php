<?php

namespace Database\Factories\Db;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
             'fullName' => $this->faker->name(),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'date' =>$this->faker->date()
        ];
    }
}
