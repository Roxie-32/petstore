<?php

namespace App\Actions\Category;


use App\Models\Category;
use Illuminate\Support\Str;

class CreateCategory
{
    public function execute(array $data) : Array
    {
        //Create a category 

        $category = Category::create([
            'uuid' => Str::uuid(),
            'title'  => $data['title'],
            'slug'  => Str::slug($data['title'],'-') ,
        ]);

        return $category->only(['uuid']);
    }

}
