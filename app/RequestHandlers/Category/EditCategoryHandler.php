<?php

namespace App\RequestHandlers\Category;

use App\Actions\Brand\EditBrand;
use App\Http\Requests\Category\CreateCategoryRequest;
use Illuminate\Http\JsonResponse;

class EditCategoryHandler
{
    public function __invoke(CreateCategoryRequest $request, EditBrand $action, $uuid)
    {
        $brand = $action->execute($request->all(), $uuid);
        return new JsonResponse(['success' => 1, 'data' => $brand], 200);
    }

}