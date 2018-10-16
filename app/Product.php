<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['ItemName', 'UserID', 'ItemPrice','ItemDescription','ItemImage','ItemStatus'];
    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }
}
