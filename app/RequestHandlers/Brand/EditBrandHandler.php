<?php

namespace App\RequestHandlers\Brand;

use App\Actions\Brand\CreateBrand;
use App\Actions\Brand\EditBrand;
use App\Http\Requests\Brand\CreateBrandRequest;
use Illuminate\Http\JsonResponse;

class EditBrandHandler
{
    public function __invoke(CreateBrandRequest $request, EditBrand $action, $uuid)
    {
        $brand = $action->execute($request->all(), $uuid);
        return new JsonResponse(['success' => 1, 'data' => $brand], 200);
    }

}