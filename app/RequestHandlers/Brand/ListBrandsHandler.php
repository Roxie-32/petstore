<?php

namespace App\RequestHandlers\Brand;

use App\Actions\Brand\ListBrands;
use App\Http\Traits\FilterTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListBrandsHandler
{
    use FilterTrait;
    
    public function __invoke(Request $request, ListBrands $action)
    {
        $brands = $action->execute($this->index($request));
        return new JsonResponse($brands, 200);
    }

}