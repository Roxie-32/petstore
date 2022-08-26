<?php

namespace App\Actions\Post;


use App\Models\Post;

class ListPosts
{
    public function execute($filter): object
    {
        //Fetch a single post

        return Post::orderBy($filter['sort'], $filter['direction'])->paginate(10);
    }

}
