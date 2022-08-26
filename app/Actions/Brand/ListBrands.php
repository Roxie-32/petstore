<?php

namespace App\Actions\Brand;


use App\Models\Brand;

class ListBrands
{
    public function execute($filter): object
    {
        //List all brands

        return Brand::orderBy($filter['sort'], $filter['direction'])->paginate(10);
    }

}
