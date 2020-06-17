<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'c_ID','c_name','c_phone', 'password', 'c_email'
     ];

}
