<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        //Get post title to be converted to slug
        $title = ucfirst(fake()->unique()->sentence);

        //Get a random file uuid
        $file = File::all()->random()->uuid;

        return [
            'uuid' => Str::uuid(),
            'title' => $title,
            'slug' => Str::slug($title,'-'),
            'content' => fake()->paragraph,
            'metadata' => [ // No need to json_encode this as the model will handle the conversion
                'author' => fake()->firstName.' '.  fake()->lastName,
                'image' => $file,
            ],
        ];
    }
}
