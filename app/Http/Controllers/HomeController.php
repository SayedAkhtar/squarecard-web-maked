<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserUrls;
use App\About;
use App\BasicDetails;
use App\Family;
use App\Photo;
use App\Rsvp;
use App\Faq;
use App\Schedule;
use App\Story;
use App\WeddingRegister;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $user = UserUrls::where('userURl', $id)->first();
        if($user == null){
            
            // return redirect('/find');
        }
        else{
            $userid = $user->user_id;
            $story = Story::where('user_urls_id',$userid)->orderBy('updated_at','DESC')->get();
            $schedule = Schedule::where('user_urls_id',$userid)->get();
            $about = About::where('user_urls_id',$userid)->first();
            $basic = BasicDetails::where('user_urls_id',$userid)->first();
            $family = Family::where('user_urls_id',$userid)->get();
            $photos = Photo::where('user_urls_id',$userid)->get();
            // return $about;


            $template = 'themes/'.$user->template_name.'/index';
            return view($template, ['story' => $story, 'schedule' => $schedule, 'about' => $about, 'basic' => $basic, 'family' => $family, 'photos' => $photos]);
        }
    }
    public function land(){
        return view('landing-page/index');
    }
    public function sendquery(){
        return success();
    }
}
