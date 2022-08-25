<?php

namespace App\Actions\Product;


use App\Models\Product;

class DeleteProduct
{
    public function execute($uuid)
    {
        $product = Product::whereUuid($uuid)->delete();
    }

}
