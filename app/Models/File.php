<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        "uuid",
        "name",
        "path",
        "size",
        "type",
    ];
    
    protected $hidden = [
        'id'
    ];

    
    public function getSizeAttribute($value)
    {
       return (round($value / 1024, 2)) . ' KB';
    }
}
