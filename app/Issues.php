<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    protected $fillable = [
        'issue_image', 'issue_heading', 'issue_description',
    ];
}
