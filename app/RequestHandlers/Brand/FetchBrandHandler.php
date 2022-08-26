<?php

namespace App\RequestHandlers\Brand;

use App\Actions\Brand\FetchBrand;
use Illuminate\Http\JsonResponse;

class FetchBrandHandler
{
    public function __invoke(FetchBrand $action, $uuid): JsonResponse
    {
        $brand = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => $brand], 200);
    }

}
