<?php

namespace App\RequestHandlers\Brand;

use App\Actions\Brand\DeleteBrand as BrandDeleteBrand;
use Illuminate\Http\JsonResponse;

class DeleteBrandHandler
{
    public function __invoke(BrandDeleteBrand $action, $uuid): JsonResponse
    {
        $brand = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => [] ], 200);
    }

}
