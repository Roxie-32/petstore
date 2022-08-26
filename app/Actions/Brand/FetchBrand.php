<?php

namespace App\Actions\Brand;

use App\Models\Brand;

class FetchBrand
{
    public function execute($uuid) : Brand
    {
        // Fetch a single brand

        $brand = Brand::whereUuid($uuid)->first();

        return $brand;
    }

}
