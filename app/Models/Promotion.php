<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        "uuid",
        "title",
        "content",
        "metadata",
    ];
    
    protected $casts = [ 
        'metadata' => 'array' // save metadata as a json column
     ];

    protected $hidden = [
        'id'
    ];
}