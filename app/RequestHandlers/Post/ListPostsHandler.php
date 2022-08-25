<?php

namespace App\RequestHandlers\Post;

use App\Actions\Post\ListPosts;
use Illuminate\Http\JsonResponse;

class ListPostsHandler
{
    public function __invoke(ListPosts $action)
    {
        $posts = $action->execute();
        return new JsonResponse($posts, 200);
    }

}