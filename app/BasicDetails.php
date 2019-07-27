<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicDetails extends Model
{
    //
    protected $fillable =['user_urls_id', 'groom_name', 'bride_name', 'event_name'];
}
