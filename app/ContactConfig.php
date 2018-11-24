<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactConfig extends Model
{
    protected $fillable = [
        'page_heading', 'description',
    ];
}
