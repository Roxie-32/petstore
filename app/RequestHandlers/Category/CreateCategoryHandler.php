<?php

namespace App\RequestHandlers\Category;

use App\Actions\Category\CreateCategory;
use App\Http\Requests\Category\CreateCategoryRequest;
use Illuminate\Http\JsonResponse;

class CreateCategoryHandler
{
    public function __invoke(CreateCategoryRequest $request, CreateCategory $action)
    {
        $category = $action->execute($request->all());
        return new JsonResponse(['success' => 1, 'data' => $category], 200);
    }

}