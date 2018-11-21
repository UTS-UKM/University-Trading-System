<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\User;


class Product extends Model
{
    protected $fillable=[
        'product_name', 'product_description'
    ];
    //
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    // public function images()
    // {
    // 	return $this->hasMany(ProductImage::class);
    // }

    public function favourites()
    {
    return $this->morphToMany(User::class, 'favouriteable');
    }

    public function favouritedBy(User $user)
    {
	return $this->favourites->contains($user);
    }

}
