<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'Employee';

    protected $fillable = [
        'idEmployee',
        'fname',
        'lname',
        'phone',
        'address',
        'dob',
    ];
    /*
    * @var array
    */
}
