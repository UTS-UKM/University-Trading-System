<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    public $table = "favouriteables";
    protected $fillable = ['user_id', 'favouriteables_id', 'favouriteables_type' ];

    //
}
