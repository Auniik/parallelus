<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'config_id','profile_name', 'designation', 'quote_message',
    ];
}
