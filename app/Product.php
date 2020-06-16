<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'description', 'image', 'category_id'
    ];


    public
    function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

}

