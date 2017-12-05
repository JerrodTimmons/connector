<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'Product';
    
        protected $fillable = [
            'idProduct',
            'name',
            'vendor',
            'price',
        ];
        /*
        * @var array
        */
}
