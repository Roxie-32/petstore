<?php

namespace App\Actions\Product;


use App\Models\Product;

class ListProducts
{
    public function execute($filter): object
    {
        //List all products

        return Product::orderBy($filter['sort'], $filter['direction'])->paginate(10);
    }

}
