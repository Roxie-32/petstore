<?php

namespace App\RequestHandlers\Promotion;

use App\Actions\Promotion\ListPromotions;
use Illuminate\Http\JsonResponse;

class ListPromotionsHandler
{
    public function __invoke(ListPromotions $action)
    {
        $promotions = $action->execute();
        return new JsonResponse($promotions, 200);
    }

}