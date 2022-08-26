<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait FilterTrait
{

    public function index(Request $request)
    {

        $limit = $request->query('limit');
        $sort = $request->query('sortBy') ?? "id";
        $direction = ($request->query('desc')) ? "desc" : "asc";

        return [
            'limit'=>$limit,
            'sort'=>$sort,
            'direction'=> $direction
        ];
    }
}
