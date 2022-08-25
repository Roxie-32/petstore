<?php

namespace App\RequestHandlers\Category;

use App\Actions\Brand\CreateBrand;
use App\Actions\Category\CreateCategory;
use Illuminate\Http\JsonResponse;

class CreateCategoryHandler
{
    public function __invoke(CreateCategory $request, CreateBrand $action)
    {
        $brand = $action->execute($request->all());
        return new JsonResponse(['success' => 1, 'data' => $brand], 200);
    }

}