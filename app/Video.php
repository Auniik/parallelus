<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'video_title', 'short_description', 'video_url', 'publication_status',
    ];
}
