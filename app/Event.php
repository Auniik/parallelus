<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $dates = ['event_date'];
	
    protected $fillable = [
        'event_title', 'description', 'event_date', 'starting_time', 'ending_time', 'event_location', 'publication_status',
    ];
}
