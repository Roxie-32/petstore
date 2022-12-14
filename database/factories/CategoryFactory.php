<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Get category title to be converted to slug
        $title = ucfirst(fake()->unique()->word);

        return [
            'uuid' => Str::uuid(),
            'title' => $title,
            'slug' => Str::slug($title, '-'),

        ];
    }
}
