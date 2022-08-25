<?php

namespace App\RequestHandlers\Category;

use App\Actions\Brand\CreateBrand;
use App\Http\Requests\Brand\CreateBrandRequest;
use Illuminate\Http\JsonResponse;

class CreateCategoryHandler
{
    public function __invoke(CreateBrandRequest $request, CreateBrand $action)
    {
        $brand = $action->execute($request->all());
        return new JsonResponse(['success' => 1, 'data' => $brand], 200);
    }

}