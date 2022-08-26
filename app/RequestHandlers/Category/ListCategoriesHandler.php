<?php

namespace App\RequestHandlers\Category;

use App\Actions\Category\ListCategories;
use App\Http\Traits\FilterTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListCategoriesHandler
{
    use FilterTrait;
    
    public function __invoke(Request $request, ListCategories $action)
    {
        $categories = $action->execute($this->index($request));
        return new JsonResponse($categories, 200);
    }

}