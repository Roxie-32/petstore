<?php

namespace App\RequestHandlers\Category;

use App\Actions\Category\DeleteCategory;
use Illuminate\Http\JsonResponse;

class DeleteCategoryHandler
{
    public function __invoke(DeleteCategory $action, $uuid)
    {
        $category = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => []], 200);
    }

}