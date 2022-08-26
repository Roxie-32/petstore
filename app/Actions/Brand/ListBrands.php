<?php

namespace App\Actions\Brand;


use App\Models\Brand;

class ListBrands
{
    public function execute($filter) : Object
    {
        //List all brands

        $brands = Brand::orderBy($filter['sort'], $filter['direction'])->paginate(10);

        return $brands;
    }

}
