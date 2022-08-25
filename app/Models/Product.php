<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_uuid", 
        "uuid",
        "title",
        "price",
        "description",
        "metadata",
        "price", 
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}