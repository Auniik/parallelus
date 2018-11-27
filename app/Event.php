<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_title', 'description', 'event_date', 'event_time', 'event_location',
    ];
}
