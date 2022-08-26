<?php

namespace App\RequestHandlers\Post;

use App\Actions\Post\FetchPost;
use Illuminate\Http\JsonResponse;

class FetchPostHandler
{
    public function __invoke(FetchPost $action, $uuid): JsonResponse
    {
        $post = $action->execute($uuid);
        return new JsonResponse(['success' => 1, 'data' => $post], 200);
    }

}
