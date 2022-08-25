<?php

namespace App\Actions\Category;


use App\Models\Category;

class ListCategories
{
    public function execute() : Object
    {
        $categories = Category::paginate(10);

        return $categories;
    }

}
