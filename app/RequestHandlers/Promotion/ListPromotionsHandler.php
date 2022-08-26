<?php

namespace App\RequestHandlers\Promotion;

use App\Actions\Promotion\ListPromotions;
use App\Http\Traits\FilterTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListPromotionsHandler
{
    use FilterTrait;

    public function __invoke(Request $request, ListPromotions $action): JsonResponse
    {
        $promotions = $action->execute($this->index($request));
        return new JsonResponse($promotions, 200);
    }

}
