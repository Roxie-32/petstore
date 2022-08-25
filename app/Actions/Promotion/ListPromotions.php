<?php

namespace App\Actions\Promotion;


use App\Models\Promotion;

class ListPromotions
{
    public function execute()
    {


        $promotions = Promotion::paginate(10);

        return $promotions;
    }
}
