<?php

namespace App\RequestHandlers\Product;

use App\Actions\Product\DeleteProduct;
use App\Actions\Product\EditProduct;
use Illuminate\Http\JsonResponse;

class DeleteProductHandler
{
    public function __invoke(DeleteProduct $action, $uuid)
    {
        $product = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => [] ], 200);
    }

}