<?php

namespace App\RequestHandlers\Product;

use App\Actions\Product\CreateProduct;
use App\Http\Requests\Product\CreateProductRequest;
use Illuminate\Http\JsonResponse;

class CreateProductHandler
{
    public function __invoke(CreateProductRequest $request, CreateProduct $action)
    {
        $product = $action->execute($request->all());
        return new JsonResponse(['success' => 1, 'data' => $product], 200);
    }

}