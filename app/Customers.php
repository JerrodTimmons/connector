<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'Customer';

    protected $fillable = [
        'idCustomer',
        'fName',
        'lName',
        'idTransaction',
        'points',
    ];
    /*
    * @var array
    */
}
