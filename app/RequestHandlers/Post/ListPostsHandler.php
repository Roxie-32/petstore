<?php

namespace App\RequestHandlers\Post;

use App\Actions\Post\ListPosts;
use App\Http\Traits\FilterTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListPostsHandler
{
    use FilterTrait;

    public function __invoke(Request $request, ListPosts $action)
    {
        
        $posts = $action->execute($this->index($request));
        return new JsonResponse($posts, 200);
    }

}