<?php

namespace App\RequestHandlers\Category;

use App\Actions\Category\ListCategories;
use Illuminate\Http\JsonResponse;

class ListCategoriesHandler
{
    public function __invoke(ListCategories $action)
    {
        $categories = $action->execute();
        return new JsonResponse($categories, 200);
    }

}