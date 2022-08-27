<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'path' => 'Images/' . rand(1,26) . '.jpg',
            'like' => mt_rand(2,560),
            'description' => fake()->sentence(rand(12,22)),
            'status' => mt_rand(0,1),
        ];
    }
}
