<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FileManager>
 */
class FileManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'SubTask_id' => $this->faker->numberBetween(1, 2),  // Example field
            'user_id' => $this->faker->numberBetween(2, 100),  // Example field
            'file_name' => $this->faker->filePath(),  // Example field
            'file_path' => $this->faker->filePath(),  // Example field
            // Add other fields as necessary
        ];
    }
}
