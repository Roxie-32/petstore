<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Get a random file uuid
        $file = File::all()->random()->uuid;

        $date = fake()->date($format = 'Y-m-d');

        return [
            'uuid' => Str::uuid(),
            'title' => fake()->unique()->sentence,
            'content' => fake()->paragraph($nbSentences = 2),
            'metadata' => [ // No need to json_encode this as the model will handle the conversion
                'valid_from' => fake()->date($format = 'Y-m-d', $max = $date),
                'valid_to' => $date,
                'image' => $file,
            ],
        ];
    }
}
