<?php

namespace App\Http\Controllers;

use App\UserUrls;
use Illuminate\Http\Request;

use App\UserUrls as User;
use App\Story;
use App\Schedule;
use App\Family;
use App\Faq;
use App\BasicDetails;
use App\Images;
use App\WeddingRegister;
use App\Rsvp;

class UserUrlController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    public function invite($invitecode){
        $url = UserUrls::where('event_code', $invitecode)->first();
        if ($url != null){
            return [
                "status"=>200,
                "url"=> $url->UserURL
            ];
        }else{
            return [
                "status"=>404,
                "url"=>""
            ];
        }
//        return ($url->UserURL);
    }
    public function index(Request $request, $userurls){

        $url = User::where('UserURL',$userurls)->first();
        // return $url->id;
        $details = User::find($url->id)->BasicDetails;
        $schedule = User::find($url->id)->Scheule;
        $story = User::find($url->id)->Story;
        $family = User::find($url->id)->Family;
        $images = User::find($url->id)->Images;
        $rsvp = User::find($url->id)->Rsvp;
        return ["user" => $url,"story" => $story ,"detail"=> $details,"schedule" => $schedule,"images"=> $images,"family"=> $family,"rsvp"=> $rsvp];

    }

    public function page(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        // return $url->id;
        $details = User::find($url->id)->BasicDetails;
        return view('index')->with('details', $details);

    }

    public function getStory(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        // $story =  User::find($url->id)->Story;
        $story =  Story::where('user_urls_id', $url->id)->get();
        $story = $story->find($id);
        return $story;
    }


// =========================== Create Functions ========================//
    // public function re(Request $request){
    //     return $request->title;
    // }

    //Create Story
    public function createStory(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $story = new Story;
        $stt ="";
        $story->user_urls_id = $url->id;
        if($request->has("story_venue")){
            $story->story_venue = $request->story_venue;
            $stt .= "venue ";
        }
        if($request ->has("story_date")){
            $story->story_date = $request->story_date;
            $stt .= "date ";
        }
        if($request->has("story_title")){
            $story->story_title = $request->story_title;
            $stt .= "title ";
        }
        if($request ->has("story_short_description")){
            $story->story_short_description = $request->story_short_description;
            $stt .= "short description ";
        }
        if($request->has("story_long_description")){
            $story->story_long_description = $request->story_long_description;
            $stt .= "long description ";
        }

        if($request ->has("story_image")){
            $story->story_image = $request->story_image;
        }
        $story->save();
        // $upstory = Story::findOrFail($id);
        return [$request, $stt];
    }

    //Create Basic Details
    public function createBasicDetails(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $basicDetails = new BasicDetails;
        $stt ="";
        $basicDetails->user_urls_id = $url->id;
        if($request->has("event_name")){
            $basicDetails->event_name = $request->event_name;
        }
        else{
            $basicDetails->event_name = "";
        }
        if($request ->has("event_date")){
            $basicDetails->event_date = $request->event_date;
        }
        else{
            $basicDetails->event_date = "";
        }
        if($request->has("groom_name")){
            $basicDetails->groom_name = $request->groom_name;
        }
        else{
            $basicDetails->groom_name = "";
        }
        if($request ->has("bride_name")){
            $basicDetails->bride_name = $request->bride_name;
        }
        else{
            $basicDetails->bride_name = "";
        }
        if($request->has("venue")){
            $basicDetails->venue = $request->venue;
        }
        else{
            $basicDetails->venue = "";
        }

        $story->save();
        // $upstory = Story::findOrFail($id);
        return [$story, $stt];
    }

    //Create Family
    public function createFamily(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $Family = new Family;
        $stt ="";

        $Family->user_urls_id = $url->id;
        if($request->has("relation_name")){
            $Family->relation_name = $request->relation_name;
        }else{
            $Family->relation_name = "";
        }
        if($request ->has("name")){
            $Family->name = $request->name;
        }else{
            $Family->name = "";
        }
        if($request->has("image")){
            $Family->image = $request->image;
        }else{
            $Family->image = "";
        }
        if($request ->has("maritial_status")){
            $Family->maritial_status = $request->maritial_status;
        }else{
            $Family->maritial_status = "";
        }
        if($request->has("bride_groom")){
            $Family->bride_groom = $request->bride_groom;
        }else{
            $Family->bride_groom = "";
        }
        if($request ->has("about")){
            $Family->about = $request->about;
        }else{
            $Family->about = "";
        }

        $Family->save();
        return [$Family];
    }

    //Create FAQ
    public function createFaq(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $Faq = new Faq;

        $Faq->user_urls_id = $url->id;
        if($request->has("faq_question")){
            $Faq->faq_questions = $request->faq_question;
        }else{
            $Faq->faq_questions = "Default";
        }
        if($request ->has("faq_answer")){
            $Faq->faq_answers = $request->faq_answer;
        }else{
            $Faq->faq_answers = "Default";
        }

        $Faq->save();

        return $Faq;
    }

    //Create Images
    public function createImages(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $images = new Images;
        $stt ="";
        $images->user_urls_id = $url->id;
        if($request->has("image_name")){
            $images->image_name = $request->image_name;
        }else{
            $images->image_name = "";
        }

        $images->save();
        // $upstory = Story::findOrFail($id);
        return $images;
    }

    //Create RSVP
    public function createRsvp(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $Rsvp = new Rsvp;
        $stt ="";
        $Rsvp->user_urls_id = $url->id;
        if($request->has("name")){
            $Rsvp->name = $request->name;
        }else{
            $Rsvp->name ="";
        }
        if($request ->has("email")){
            $Rsvp->email = $request->email;
        }else{
            $Rsvp->email ="";
        }
        if($request->has("mobile")){
            $Rsvp->mobile = $request->mobile;
        }else{
            $Rsvp->mobile = "";
        }
        if($request ->has("comming")){
            $Rsvp->comming = $request->comming;
        }else{
            $Rsvp->comming = false;
        }

        $Rsvp->save();
        // $upstory = Story::findOrFail($id);
        return $Rsvp;
    }

    //Create Schedule
    public function createSchedule(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $schedule = new Schedule;
        $stt ="";
        $schedule->user_urls_id = $url->id;
        if($request->has("event_name")){
            $schedule->story_venue = $request->story_venue;
            $stt .= "venue ";
        }
        if($request ->has("event_start_date")){
            $schedule->event_start_date = $request->event_start_date;
            $stt .= "date ";
        }
        if($request->has("event_start_time")){
            $schedule->event_start_time = $request->event_start_time;
            $stt .= "title ";
        }
        if($request ->has("event_end_date")){
            $schedule->event_end_date = $request->event_end_date;
            $stt .= "date ";
        }
        if($request->has("event_end_time")){
            $schedule->event_end_time = $request->event_end_time;
            $stt .= "title ";
        }
        if($request->has("event_venue")){
            $schedule->event_venue = $request->event_venue;
            $stt .= "title ";
        }
        if($request ->has("event_short_description")){
            $schedule->event_short_description = $request->event_short_description;
            $stt .= "short description ";
        }
        if($request->has("event_long_description")){
            $schedule->event_long_description = $request->event_long_description;
            $stt .= "long description ";
        }
        if($request ->has("event_image")){
            $schedule->event_image = $request->event_image;
        }
        if($request ->has("event_note")){
            $schedule->event_note = $request->event_note;
        }
        $schedule->save();
        // $upstory = Story::findOrFail($id);
        return $schedule;
    }

    //Create Wedding Registry
    public function createWeddingRigistry(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $registry = new WeddingRegister;
        $stt ="";
        $registry->user_urls_id = $url->id;
        if($request->has("registry_name")){
            $registry->registry_name = $request->registry_name;
            $stt .= "venue ";
        }
        if($request ->has("registry_url")){
            $registry->registry_url = $request->registry_url;
            $stt .= "date ";
        }
        if($request->has("registry_image")){
            $registry->registry_image = $request->registry_image;
            $stt .= "title ";
        }
        $registry->save();
        // $upstory = Story::findOrFail($id);
        return $registry;
    }

// ============================ Edit Functions =========================//
    public function edit(Request $request, $userurls){
        $url = User::where('UserURL',$userurls)->first();
        $story = User::find($url->id)->Story;
        return $url;
    }

    public function editStory(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        $stories = User::find($url->id)->Story;
        $story = Story::findOrFail($id);
        $stt ="";
        if($request->has("story_venue")){
            $story->story_venue = $request->story_venue;
            $stt .= "venue ";
        }
        if($request ->has("story_date")){
            $story->story_date = $request->story_date;
            $stt .= "date ";
        }
        if($request->has("story_title")){
            $story->story_title = $request->story_title;
            $stt .= "title ";
        }
        if($request ->has("story_short_description")){
            $story->story_short_description = $request->story_short_description;
            $stt .= "short description ";
        }
        if($request->has("story_long_description")){
            $story->story_long_description = $request->story_long_description;
            $stt .= "long description ";
        }
        if($request ->has("story_image")){
            $story->story_image = $request->story_image;
        }
        $story->save();
        // $upstory = Story::findOrFail($id);
        return [$story, $stt];
    }

    // Edit Schedule Section
    public function editSchedule(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        $stories = User::find($url->id)->Story;
        $story = Schedule::findOrFail($id);
        $stt ="";
        if($request->has("story_venue")){
            $story->story_venue = $request->story_venue;
            $stt .= "venue ";
        }
        if($request ->has("story_date")){
            $story->story_date = $request->story_date;
            $stt .= "date ";
        }
        if($request->has("story_title")){
            $story->story_title = $request->story_title;
            $stt .= "title ";
        }
        if($request ->has("story_short_description")){
            $story->story_short_description = $request->story_short_description;
            $stt .= "short description ";
        }
        if($request->has("story_long_description")){
            $story->story_long_description = $request->story_long_description;
            $stt .= "long description ";
        }
        if($request ->has("story_image")){
            $story->story_image = $request->story_image;
        }
        $story->save();
        // $upstory = Story::findOrFail($id);
        return [$story, $stt];
    }

    public function editFamily(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        $stories = User::find($url->id)->Story;
        $story = Family::findOrFail($id);
        $stt ="";
        if($request->has("story_venue")){
            $story->story_venue = $request->story_venue;
            $stt .= "venue ";
        }
        if($request ->has("story_date")){
            $story->story_date = $request->story_date;
            $stt .= "date ";
        }
        if($request->has("story_title")){
            $story->story_title = $request->story_title;
            $stt .= "title ";
        }
        if($request ->has("story_short_description")){
            $story->story_short_description = $request->story_short_description;
            $stt .= "short description ";
        }
        if($request->has("story_long_description")){
            $story->story_long_description = $request->story_long_description;
            $stt .= "long description ";
        }
        if($request ->has("story_image")){
            $story->story_image = $request->story_image;
        }
        $story->save();
        // $upstory = Story::findOrFail($id);
        return [$story, $stt];
    }

    public function editBasicDetails(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        $stories = User::find($url->id)->Story;
        $details = BasicDetails::findOrFail($id);
        $stt ="";
        if($request->has("event_name")){
            $details->event_name = $request->event_name;
            $stt .= "venue ";
        }
        if($request ->has("event_date")){
            $details->event_date = $request->event_date;
            $stt .= "date ";
        }
        if($request->has("bride_name")){
            $details->bride_name = $request->bride_name;
            $stt .= "title ";
        }
        if($request ->has("groom_name")){
            $details->groom_name = $request->groom_name;
            $stt .= "short description ";
        }
        if($request->has("venue")){
            $details->venue = $request->venue;
            $stt .= "long description ";
        }
        $details->save();
        // $upstory = Story::findOrFail($id);
        return [$details, $stt];
    }

    // Edit Images
    public function editImages(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        $Images = User::find($url->id)->Story;
        $Image = Images::findOrFail($id);
    }
    // Edit RSVP
    public function editRsvp(Request $request, $userurls, $id){
        $url = User::where('UserURL',$userurls)->first();
        $Images = User::find($url->id)->Story;
        $Rsvp = Rsvp::findOrFail($id);
    }


// ========================= Delete Functions ======================= //

    // Delete Story
    public function deleteStory(Request $request, $userurls, $id){
        $story = Story::findOrFail($id);
        if($story->delete()){
            return $story;
        }
    }

    //Delete basic details
    public function deleteBasicDetail(Request $request, $userurls, $id){
        $delete = BasicDetails::findOrFail($id);
        if($delete->delete()){
            return $delete;
        }
    }

    //Delete Family
    public function deleteFamily(Request $request, $userurls, $id){
        $family = Family::findOrFail($id);
        if($family->delete()){
            return $family;
        }
    }

    //Delete FAQ
    public function deleteFaq(Request $request, $userurls, $id){
        $Faq = Faq::findOrFail($id);
        if($Faq->delete()){
            return $Faq;
        }
    }

    //Delete Schedule
    public function deleteSchedule(Request $request, $userurls, $id){
        $schedule = Schedule::findOrFail($id);
        if($schedule->delete()){
            return $schedule;
        }
    }

    //Delete RSPV
    public function deleteRsvp(Request $request, $userurls, $id){
        $Rsvp = Rsvp::findOrFail($id);
        if($Rsvp->delete()){
            return $Rsvp;
        }
    }

    //Delete Images
    public function deleteImages(Request $request, $userurls, $id){
        $Images = Images::findOrFail($id);
        if($Images->delete()){
            return $Images;
        }
    }

    //Delete Images
    public function deleteWeddingRegistry(Request $request, $userurls, $id){
        $wedding = WeddingRegister::findOrFail($id);
        if($wedding->delete()){
            return $wedding;
        }
    }
}
