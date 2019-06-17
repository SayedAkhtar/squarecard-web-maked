<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserUrls extends Model
{
    //
    public function BasicDetails()
    {
        return $this->hasOne('App\BasicDetails');
    }
    public function WeddingRegister()
    {
        return $this->hasOne('App\WeddingRegister');
    }
    public function Family()
    {
        return $this->hasMany('App\Family');
    }
    public function Faq()
    {
        return $this->hasMany('App\Faq');
    }
    public function Images()
    {
        return $this->hasMany('App\Images');
    }
    public function Rsvp()
    {
        return $this->hasMany('App\Rsvp');
    }
    public function Story()
    {
        return $this->hasMany('App\Story');
    }
    public function Schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
