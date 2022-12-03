<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

    
    use HasFactory;

    protected $fillable = [

        'slug',
        'headline',
        'cateogry_id',
        'category'


    ];

    public function category()

    {
        return $this->belongsTo(Ctegory::class);
    }
}
