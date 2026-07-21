<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name','email','phone','message',
        'policy_check','terms_policy',
        'ip_address','user_agent',
        'city','region','country','country_code','timezone','lat','lon','isp'
    ];

    protected $casts = [
        'policy_check' => 'boolean',
        'terms_policy' => 'boolean',
        'lat' => 'float',
        'lon' => 'float',
    ];
}
