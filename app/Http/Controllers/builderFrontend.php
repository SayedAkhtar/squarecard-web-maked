<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserUrls;
use App\BasicDetails;
use App\About;
use App\Template;
use Illuminate\Support\Facades\App;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use App\Mail\QueryMail;

class builderFrontend extends Controller
{

    public function login(){
        if (Auth::guest()) {
            return view('/builder/pages/login');
        }
        else{
            $id = Auth::user()->id;
            $user = UserUrls::where('user_id',$id)->first();
            return redirect (route('dashboard'));
        }
    }

    public function signup(){
        if (Auth::guest()) {
            return view('/builder/pages/signup');
        }
        else{
            $id = Auth::user()->id;
            $user = UserUrls::where('user_id',$id)->first();
            return redirect (route('dashboard'));
        }
    }

    public function signupInformation(){
        if(UserUrls::EventUrl() != null) {
            return redirect(route('dashboard'));

        }else{
            return view('/builder/pages/basic-required');
        }
    }
    public function createUser(Request $request){
        $id = Auth::user()->id;
        $input = $request->only(['userurl', 'groom_name', 'bride_name', 'event_name']);
        $url = UserUrls::create(['user_id'=> $id, 'UserURL'=> $input['userurl'], 'template_name'=> 'basic', 'event_code' => random_int(10,99).$id.random_int(100,999)]);
        $basic = BasicDetails::create(['user_urls_id'=> $id, 'groom_name'=> $input['groom_name'], 'bride_name'=> $input['bride_name'], 'event_name'=> $input['event_name']]);
        $about = About::create(['user_urls_id'=> $id, 'groom_name'=> $input['groom_name'], 'bride_name'=> $input['bride_name']]);

        $url->save();
        $basic->save();
        $about->save();
        $user = UserUrls::where('user_id',$id)->first();
        return redirect()->route('dashboard',[$user])->with(['user' => $user]);
    }
    public function checkUserUrl(Request $request){
        $array = [];
        $name = explode(' ',$request->groom_name)[0]." weds ".explode(' ',$request->bride_name)[0];
        $rndname = explode(' ',$request->groom_name)[0]." weds ".explode(' ',$request->bride_name)[0]." ".rand(1,9);
        $revname = explode(' ',$request->groom_name)[0]." weds ".explode(' ',$request->bride_name)[0];
        $rndrevname = explode(' ',$request->groom_name)[0]." weds ".explode(' ',$request->bride_name)[0]." ".rand(1,9);
        $option1 = Str::kebab($name);
        $option2 = Str::kebab($revname);
        $option3 = Str::camel($name);
        $option4 = Str::camel($revname);
        $option5 = Str::snake($name);
        $option6 = Str::snake($revname);
        $option7 = Str::kebab($rndname);
        $option8 = Str::kebab($rndrevname);

        if(UserUrls::where('UserURL', $option1)->count() == 0){
            $array = Arr::prepend($array, $option1);
        }
        if(UserUrls::where('UserURL', $option2)->count() == 0){
            $array = Arr::prepend($array, $option2);
        }
        if(UserUrls::where('UserURL', $option3)->count() == 0){
            $array = Arr::prepend($array, $option3);
        }
        if(UserUrls::where('UserURL', $option4)->count() == 0){
            $array = Arr::prepend($array, $option4);
        }
        if(UserUrls::where('UserURL', $option5)->count() == 0){
            $array = Arr::prepend($array, $option5);
        }
        if(UserUrls::where('UserURL', $option6)->count() == 0){
            $array = Arr::prepend($array, $option6);
        }
        if(UserUrls::where('UserURL', $option7)->count() == 0){
            $array = Arr::prepend($array, $option7);
        }
        if(UserUrls::where('UserURL', $option8)->count() == 0){
            $array = Arr::prepend($array, $option8);
        }

        return $array ;
    }

    public function showDashboard(){
        if(Auth::user()){
        $id = Auth::user()->id;
        $user = UserUrls::where('user_id',$id)->first();
        // dd($user);
            return view('/builder/pages/dashboard', ['user' => $user]);
        }
        else{
            return redirect (route('/builder'));
        }
    }

    public function listTemplates(){
        $data = Template::all();
        $id = Auth::user()->id;
        $user = UserUrls::where('user_id',$id)->first();
        return view('/builder/pages/templates/index',['data' => $data,'user' => $user]);
    }

    public function sendquery(Request $request, \Illuminate\Mail\Mailer $mailer){
        $name = $request->input('query-name');
        $email = $request->input('query-email');
        $mobile = $request->input('query-mobile');
        $query = $request->input('query-msg');


        $mailer->to('sayed182@gmail.com')->send(new QueryMail($name, $email, $mobile, $query));
        return back()->with('success', "Message submitted");
    }
}
