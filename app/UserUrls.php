<?php

namespace App;

use App\Http\Resources\UserUrl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserUrls extends Model
{
    //
    protected $fillable = ['user_id', 'UserURL', 'event_code', 'template_name'];

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

    public static function EventCode(){
        $id = Auth::user()->id;
        $code = UserUrls::class;
        return $code::find($id)->event_code;
    }

    public static function EventUrl(){
        $id = Auth::user()->id;
        $code = UserUrls::class;
        return $code::find($id)->UserURL;
    }
}
