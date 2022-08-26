<?php

namespace App\RequestHandlers\Category;

use App\Actions\Category\FetchCategory;
use Illuminate\Http\JsonResponse;

class FetchCategoryHandler
{
    public function __invoke(FetchCategory $action, $uuid): JsonResponse
    {
        $category = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => $category], 200);
    }

}
