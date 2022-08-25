<?php

namespace App\Actions\Category;

use App\Models\Category;

class DeleteCategory
{
    public function execute($uuid)
    {
        $category = Category::whereUuid($uuid)->delete();

        return $category;
    }

}
