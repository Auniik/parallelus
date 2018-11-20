<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'profile_name', 'designation', 'quote_message', 'address', 'bg_image',
    ];
}
