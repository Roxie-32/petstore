<?php

namespace App\Actions\Post;


use App\Models\Post;

class ListPosts
{
    public function execute($filter) 
    {
        //Fetch a single post
        
        $posts = Post::orderBy($filter['sort'], $filter['direction'])->paginate(10);

        return $posts;
    }

}
