<?php

namespace App\Actions\Post;


use App\Models\Post;

class FetchPost
{
    public function execute($uuid)
    {
        $post = Post::whereUuid($uuid)->first();

        return $post;
    }

}
