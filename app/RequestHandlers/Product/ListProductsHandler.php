<?php

namespace App\RequestHandlers\Product;

use App\Actions\Product\ListProducts;
use Illuminate\Http\JsonResponse;

class ListProductsHandler
{
    public function __invoke(ListProducts $action)
    {
        $products = $action->execute();
        return new JsonResponse($products, 200);
    }

}