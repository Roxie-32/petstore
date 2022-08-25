<?php

namespace App\RequestHandlers\Product;

use App\Actions\Product\FetchProduct;
use Illuminate\Http\JsonResponse;

class FetchProductHandler
{
    public function __invoke(FetchProduct $action, $uuid)
    {
        $product = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => $product], 200);
    }

}