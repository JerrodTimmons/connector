<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventorys extends Model
{
    protected $table = 'Inventory';

    protected $fillable = [
        'idProduct',
        'quantity',
        'idInventory',
    ];
    /*
    * @var array
    */
}
