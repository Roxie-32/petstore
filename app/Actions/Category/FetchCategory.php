<?php

namespace App\Actions\Category;

use App\Models\Category;

class FetchCategory
{
    public function execute($uuid) : Category
    {
        $category = Category::whereUuid($uuid)->first();

        return $category;
    }

}
