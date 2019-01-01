<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Click extends Model
{
    public $table = "clicks";
    protected $fillable = ['product_id' ];
    
}


