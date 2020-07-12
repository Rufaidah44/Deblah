<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servproviders extends Model
{
     

    protected $primaryKey = 'p_ID';

    protected $fillable = [
        'p_ID','p_owner_name','p_email1', 'password', 'p_mobile1', 'p_serv_type'  
     ];

     public function hallservices()
     {
         return $this->hasMany(HallServices::class);
     }

     public function user()
     {
        return $this->hasOne('App\User', 'p_ID', 'uid');
     }

}
