<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'cost_price', 'retail_price'];  

    public function categories()  
	{
	    return $this->belongsToMany(Category::class);
	}
}
