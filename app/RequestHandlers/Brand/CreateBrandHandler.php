<?php

namespace App\RequestHandlers\Brand;

use App\Actions\Brand\CreateBrand;
use App\Http\Requests\Brand\CreateBrandRequest;
use Illuminate\Http\JsonResponse;

class CreateBrandHandler
{
    public function __invoke(CreateBrandRequest $request, CreateBrand $action)
    {
        $brand = $action->execute($request->all());
        return new JsonResponse(['success' => true, 'brand' => $brand], 201);
    }

}