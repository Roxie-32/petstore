<?php

namespace App\Actions\Product;


use App\Models\Product;

class EditProduct
{
    public function execute(array $data, $uuid): Product
    {
        // Edit a product

        $product = Product::whereUuid($uuid)->first();
        $product->update([
            'category_uuid' => $data['category_uuid'],
            'title' => $data['title'],
            'price' => $data['price'],
            'description' => $data['description'],
            'metadata' => $data['metadata'],
        ]);

        return $product;
    }

}
