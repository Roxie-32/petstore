<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //Get a random brand uuid
        $brand = Brand::all()->random()->uuid;

        //Get a random category uuid
        $category = Category::all()->random()->uuid;


        return [
            'category_uuid' => $category,
            'uuid' => Str::uuid(),
            'title' => ucfirst(fake()->unique()->word),
            'price' => fake()->randomDigit,
            'description' => fake()->paragraph,
            'metadata' => [ // No need to json_encode this as your model will handle the conversion
                'brand' => $brand,
                'image' => $this->faker->imageUrl(640, 480),
            ],
        ];
    }
}
