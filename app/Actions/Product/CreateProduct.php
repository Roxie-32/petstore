<?php

namespace App\Actions\Product;


use App\Models\Product;
use Illuminate\Support\Str;

class CreateProduct
{
    public function execute(array $data) : Array
    {
        // Create a product

        $category = Product::create([
            'uuid' => Str::uuid(),
            'category_uuid'  => $data['category_uuid'],
            'title'  => $data['title'],
            'price'  => $data['price'],
            'description'  => $data['description'],
            'metadata'  => $data['metadata'],
        ]);

        return $category->only(['uuid']);
    }

}
