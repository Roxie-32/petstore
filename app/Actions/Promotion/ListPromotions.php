<?php

namespace App\Actions\Promotion;


use App\Models\Promotion;

class ListPromotions
{
    public function execute($filter)
    {
        //List all blog promotions
        
        return Promotion::orderBy($filter['sort'], $filter['direction'])->paginate(10);
    }
}
