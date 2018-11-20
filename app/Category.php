<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable=['id','slug'];
    protected $table='categories';
    public function products()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(Product::class);
    }
}