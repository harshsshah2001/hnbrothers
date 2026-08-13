<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = "categories";

    protected  $fillable = [
        'name',
        'slug',
        'color',
        'image',
        'description',
        'status'
    ];
}
