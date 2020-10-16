<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteVisitors extends Model
{
    protected $table = 'website_visitors';
    protected $guarded = ['id'];
}
