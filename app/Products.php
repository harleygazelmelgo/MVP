<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Products extends Model
{
    protected $table = 'products';

    function user() {
        return $this->belongsTo('App\User');
    }
}
