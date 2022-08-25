<?php

namespace App\Actions\Category;


use App\Models\Category;
use Illuminate\Support\Str;

class EditCategory
{
    public function execute(array $data, $uuid)
    {
       $category = Category::whereUuid($uuid)->first();
       $category->update([
            'title'  => $data['title'],
            'slug'  => Str::slug($data['title'],'-') ,
        ]);

        return $category;
    }

}
