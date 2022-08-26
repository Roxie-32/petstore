<?php

namespace App\Actions\Category;


use App\Models\Category;

class ListCategories
{
    public function execute($filter) : Object
    {
        $categories = Category::orderBy($filter['sort'], $filter['direction'])->paginate(10);
        

        return $categories;
    }

}
