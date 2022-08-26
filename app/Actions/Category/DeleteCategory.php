<?php

namespace App\Actions\Category;

use App\Models\Category;

class DeleteCategory
{
    public function execute($uuid)
    {
        //Delete a category

        return Category::whereUuid($uuid)->delete();
    }

}
