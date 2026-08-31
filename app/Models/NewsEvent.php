<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $fillable = ['type', 'title', 'slug', 'content', 'image', 'event_date', 'is_published'];
}