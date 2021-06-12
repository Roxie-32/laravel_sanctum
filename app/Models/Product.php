<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';//will specify the tables for that midek as gou no get appetite
    

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price'
    ];
}
