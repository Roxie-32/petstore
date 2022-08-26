<?php

namespace App\RequestHandlers\Product;

use App\Actions\Product\ListProducts;
use App\Http\Traits\FilterTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListProductsHandler
{
    use FilterTrait;

    public function __invoke(Request $request, ListProducts $action): JsonResponse
    {
        $products = $action->execute($this->index($request));
        return new JsonResponse($products, 200);
    }

}
