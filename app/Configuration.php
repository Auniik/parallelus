<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'company_name', 'company_moto', 'copyright',
    ];
}
