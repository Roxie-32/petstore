<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        return [
            'uuid' => Str::uuid(),
            'name'  =>Str::random(10),
            'path'  => fake()->imageUrl ,
            'size'  => '46045',
            'type'  =>  'mime/png'
        ];
    }
}
