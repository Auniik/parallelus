<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueConfig extends Model
{
     protected $fillable = [
        'page_heading', 'bg_image',
    ];
}
