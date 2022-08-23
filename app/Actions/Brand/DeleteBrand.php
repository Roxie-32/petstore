<?php

namespace App\Actions\Brand;


use App\Models\Brand;

class DeleteBrand
{
    public function execute($uuid)
    {
       $brand = Brand::whereUuid($uuid)->first();
       $brand->delete();
    }

}
