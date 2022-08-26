<?php

namespace App\Actions\Product;


use App\Models\Product;

class DeleteProduct
{
    public function execute($uuid): void
    {
        //Delete a product

        $product = Product::whereUuid($uuid)->delete();
    }

}
