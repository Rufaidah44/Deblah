<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HallServices extends Model
{

    public function servproviders()
    {
        return $this->belongsTo(ServProviders::class);
    }

    protected $fillable = [
        's_ID','p_ID','h_status', 'h_name', 'h_type', 'h_age', 'h_city', 'h_address', 'h_location', 'h_national_address',
        'female_hold','male_hold','female_no','male_no', 'female_hosting_food','male_hosting_food', 'female_denner', 
        'male_denner', 'female_waiters', 'male_waiters', 'female_cleaners', 'male_cleaners', 'female_abayah_serve', 
        'kosha', 'speakers', 'female_decoration', 'vip_room', 'female_services_room',      
     ];

    
     public function hallsphotos()
     {
        return $this->hasMany(hallsphotos::class);
     }
}
