<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IllnessGroup>
 */
class IllnessGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Truncate generated name to 8 characters
            'name' => Str::limit($this->faker->firstName, 8),
            'is_active' => $this->faker->boolean, // Random boolean value
            'created_by' => $this->faker->optional()->name, // Optional field, may be null
            'updated_by' => $this->faker->optional()->name, // Optional field
            'deleted_by' => null, // Default to null
        ];
    }
}
