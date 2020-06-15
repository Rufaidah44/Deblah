<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class servproviders extends Model
{
     

    protected $fillable = [
        'p_ID','p_owner_name','p_email1', 'password', 'p_mobile1', 'p_serv_type'  
     ];
}
