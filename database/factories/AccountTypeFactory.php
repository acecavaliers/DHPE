<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccountType>
 */
class AccountTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Generates a random name
            'is_active' => $this->faker->boolean(50), // 50% chance to be true or false
            'created_by' => $this->faker->optional()->userName(), // Random username, but can be null
            'updated_by' => $this->faker->optional()->userName(), // Random username, but can be null
            'deleted_by' => $this->faker->optional()->userName(), // Random username, but can be null
        ];
    }
}
