<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait FilterTrait
{

    public function index(Request $request)
    {

        //check if desc query parameter is true or null
        if($request->query('desc') == "true" || $request->query('desc') == null){
            $direction = 'desc';
        }else{
            $direction = "asc";

        }

        $limit = $request->query('limit');
        $sort = $request->query('sortBy') ?? "id";

        //return $query paramaters for filtering
        return [
            'limit'=>$limit,
            'sort'=>$sort,
            'direction'=> $direction
        ];
    }
}
