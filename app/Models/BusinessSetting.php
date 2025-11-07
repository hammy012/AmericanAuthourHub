<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetting extends Model
{
    use HasFactory;

    protected $disk = 'public';

    protected $table = 'business_settings'; // Specify the table name

    protected $fillable = ['company_name', 'email', 'phone', 'ceo'];
}
