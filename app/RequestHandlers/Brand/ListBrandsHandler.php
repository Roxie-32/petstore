<?php

namespace App\RequestHandlers\Brand;

use App\Actions\Brand\ListBrands;
use Illuminate\Http\JsonResponse;

class ListBrandsHandler
{
    public function __invoke(ListBrands $action)
    {
        $brands = $action->execute();
        return new JsonResponse($brands, 200);
    }

}