<?php

namespace App\Actions\Brand;


use App\Models\Brand;
use Illuminate\Support\Str;

class EditBrand
{
    public function execute(array $data, $uuid)
    {
       $brand = Brand::whereUuid($uuid)->first();
       $brand->update([
            'title'  => $data['title'],
            'slug'  => Str::slug($data['title'],'-') ,
        ]);

        return $brand;
    }

}
