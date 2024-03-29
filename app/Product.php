<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'expiration_date',
    ];
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    public function provider(){
    	return $this->belongsTo(Provider::class);
    }
    public function warehouse(){
    	return $this->belongsTo(Warehouse::class);
    }
    public function operations(){
    	return $this->belongsToMany(Operation::class)->withPivot('id','quantity','unit_price')->withTimestamps();
    }
}
