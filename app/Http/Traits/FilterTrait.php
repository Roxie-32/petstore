<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait FilterTrait
{

    public function index(Request $request)
    {

        if($request->query('desc') == "true" || $request->query('desc') == null){
            $direction = 'desc';
        }else{
            $direction = "asc";

        }

        $limit = $request->query('limit');
        $sort = $request->query('sortBy') ?? "id";

        return [
            'limit'=>$limit,
            'sort'=>$sort,
            'direction'=> $direction
        ];
    }
}
