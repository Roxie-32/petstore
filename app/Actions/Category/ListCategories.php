<?php

namespace App\Actions\Category;


use App\Models\Category;

class ListCategories
{
    public function execute($filter): object
    {
        //List all categories

        return Category::orderBy($filter['sort'], $filter['direction'])->paginate(10);
    }

}
