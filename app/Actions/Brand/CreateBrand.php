<?php

namespace App\Actions\Brand;


use App\Models\Brand;
use Illuminate\Support\Str;

class CreateBrand
{
    public function execute(array $data) : Array
    {
        $brand = Brand::create([
            'uuid' => Str::uuid(),
            'title'  => $data['title'],
            'slug'  => Str::slug($data['title'],'-') ,
        ]);

        return $brand->only(['uuid']);
    }

}
