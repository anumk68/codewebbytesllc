<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     use HasFactory;

    protected $fillable = [
        'service',
        'website',
        'fname',
        'lname',
        'email',
        'countrycode',
        'number',
    ];
}
