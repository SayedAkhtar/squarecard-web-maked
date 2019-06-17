<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserUrls;

class authenticationController extends Controller
{
    //
    public function login(Request $request ){
        $user = User::where('email', $request->email)->first();
        $url = UserUrls::find($user->id)->first()->UserURL;
        $user->UserUrl = $url;
        return $user;
    }
    public function signup(Request $request){
        return $request;
    }
}
