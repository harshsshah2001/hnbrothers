<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    public $table = "sub_categories";

    protected $fillable = [
        'parent_category_id',
        'name',
        'slug',
        'color',
        'image',
        'description',
        'status'
    ];
}
