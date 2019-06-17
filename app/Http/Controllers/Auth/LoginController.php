<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/builder/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }

    // public function showLoginForm()
    // {
    //     return view('builder.pages.layout.login');
    // }

    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $email = $user->email;
        $userid = $user->id;
        // $user = 'admin@admin.com';
        $data = User::where('email',$email)->first();
        if(!empty($data)){
            $id = $data->id;
            Auth::loginUsingId($id);
            return redirect($this->redirectTo);
        }
        else{
            $newUser = new User;
            $newUser->email = $email;
            $newUser->password = Hash::make($userid);
            $newUser->save();
            $id = $newUser->id;
            Auth::loginUsingId($id);
            return redirect('/builder/information');
        }
        // $user->token;
    }

    public function redirectToGoogleProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $email = $user->email;
        $userid = $user->id;
        // $user = 'admin@admin.com';
        $data = User::where('email',$email)->first();
        if(!empty($data)){
            $id = $data->id;
            Auth::loginUsingId($id);
            return redirect($this->redirectTo);
        }
        else{
            $newUser = new User;
            $newUser->email = $email;
            $newUser->password = Hash::make($userid);
            $newUser->save();
            $id = $newUser->id;
            Auth::loginUsingId($id);
            return redirect('/builder/information');
        }
        // $user->token;
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/builder');
    }
}
