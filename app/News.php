<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'article_image', 'news_heading', 'description', 'news_date', 'publication_status',
    ];
}
