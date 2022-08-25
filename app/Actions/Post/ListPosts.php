<?php

namespace App\Actions\Post;


use App\Models\Post;

class ListPosts
{
    public function execute() : Object
    {
        $posts = Post::paginate(10);

        return $posts;
    }

}
