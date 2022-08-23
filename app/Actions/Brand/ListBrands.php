<?php

namespace App\Actions\Brand;


use App\Models\Brand;

class ListBrands
{
    public function execute() : Object
    {
        $brands = Brand::paginate(10);

        return $brands;
    }

}
