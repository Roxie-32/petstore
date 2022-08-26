<?php

namespace App\Actions\Post;


use App\Models\Post;

class FetchPost
{
    public function execute($uuid): Post
    {
        //List all blog posts

        return Post::whereUuid($uuid)->first();
    }

}
