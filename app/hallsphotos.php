<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hallsphotos extends Model
{
    protected $fillable = [
        's_ID','photo_name','photo_size','photo_path'
    ];

    public function hallservices()
     {
         return $this->belongsTo(HallServices::class);
     }
}
