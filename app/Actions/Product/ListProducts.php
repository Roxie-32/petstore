<?php

namespace App\Actions\Product;


use App\Models\Product;

class ListProducts
{
    public function execute() : Object
    {
        $categories = Product::paginate(10);

        return $categories;
    }

}
