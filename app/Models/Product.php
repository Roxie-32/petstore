<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "category_uuid", 
        "uuid",
        "title",
        "price",
        "description",
        "metadata",
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $casts = [ 
        'metadata' => 'array' // save metadata as a json column
     ];
    protected $with = [
        'category'
    ];

     public function category(){
        return $this->belongsTo(Category::class,'category_uuid','uuid');
    }
    
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
    

