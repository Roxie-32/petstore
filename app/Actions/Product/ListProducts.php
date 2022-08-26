<?php

namespace App\Actions\Product;


use App\Models\Product;

class ListProducts
{
    public function execute($filter) : Object
    {
        //List all products
        
        $products = Product::orderBy($filter['sort'], $filter['direction'])->paginate(10);

        return $products;
    }

}
