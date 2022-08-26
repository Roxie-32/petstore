<?php

namespace App\Actions\Category;

use App\Models\Category;

class FetchCategory
{
    public function execute($uuid): Category
    {
        //Fetch a single category

        return Category::whereUuid($uuid)->first();
    }

}
