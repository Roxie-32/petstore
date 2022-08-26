<?php

namespace App\RequestHandlers\Category;

use App\Actions\Category\EditCategory;
use App\Http\Requests\Category\CreateCategoryRequest;
use Illuminate\Http\JsonResponse;

class EditCategoryHandler
{
    public function __invoke(CreateCategoryRequest $request, EditCategory $action, $uuid): JsonResponse
    {
        $category = $action->execute($request->all(), $uuid);
        return new JsonResponse(['success' => 1, 'data' => $category], 200);
    }

}
