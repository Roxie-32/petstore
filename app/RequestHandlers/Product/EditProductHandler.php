<?php

namespace App\RequestHandlers\Product;

use App\Actions\Product\EditProduct;
use App\Http\Requests\Product\CreateProductRequest;
use Illuminate\Http\JsonResponse;

class EditProductHandler
{
    public function __invoke(CreateProductRequest $request, EditProduct $action, $uuid)
    {
        $product = $action->execute($request->all(), $uuid);
        return new JsonResponse(['success' => 1, 'data' => $product], 200);
    }

}