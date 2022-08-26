<?php

namespace App\Actions\Post;


use App\Models\Post;

class FetchPost
{
    public function execute($uuid)
    {
        //List all blog posts
        
        $post = Post::whereUuid($uuid)->first();

        return $post;
    }

}
