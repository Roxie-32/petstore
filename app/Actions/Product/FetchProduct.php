<?php

namespace App\Actions\Product;

use App\Models\Product;

class FetchProduct
{
    public function execute($uuid): Product
    {
        //Fetch a product

        return Product::whereUuid($uuid)->first();
    }

}
