<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\About;
use App\BasicDetails;
use Illuminate\Support\Str;
use App\UserUrls;

class aboutCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $user = Auth::user()->id;
        $url = UserUrls::where('user_id', $user)->first();
        $data = About::where('user_urls_id', $user)->first();
        if ($data == null){
            return $this->create();
        }
        else{
            return view("builder/pages/about-couple/index",["data" => $data, 'user'=> $url]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user()->id;
        $basic = BasicDetails::where('user_urls_id', $user)->first();
        $about = new About;
        $about->user_urls_id = $basic->user_urls_id;
        $about->groom_name = $basic->groom_name;
        $about->bride_name = $basic->bride_name;
        $about->save();
        $data = About::where('user_urls_id', $user)->first();
        return redirect()->route('about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $user = Auth::user()->id;
        $input['imagename'] = null;
        if($request->image != null){
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $name = Str::random(10);
        $image = $request->file('image');
        $input['imagename'] = $user.'-'.$name.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        }
        $data = About::where('user_urls_id', $user)->first();
        if($id == "groom"){
            $data->groom_name = $request->full_name;
            $data->groom_dob = $request->date;
            $data->groom_profession = $request->profession;
            $data->groom_about = $request->about;
            if($input["imagename"]==null || $input["imagename"]==''){
                $data->groom_image = About::where('user_urls_id',$user)->first()->groom_image;
            }else{
                $data->groom_image = $input["imagename"];
            }
            $data->save();
        }
        elseif($id == "bride"){
            $data->bride_name = $request->full_name;
            $data->bride_dob = $request->date;
            $data->bride_profession = $request->profession;
            $data->bride_about = $request->about;
            if($input["imagename"]==null || $input["imagename"]==''){
                $data->bride_image = About::where('user_urls_id',$user)->first()->bride_image;
            }else{
                $data->bride_image = $input["imagename"];
            }
            $data->save();
        }else{
            return "null";
        }
        return redirect()->route('about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = Auth::user()->id;
        $url = UserUrls::where('user_id', $user)->first();
        $name= null; $profession= null; $dob= null; $about= null; $image= null;
        if($id == "groom" || $id == "Groom"){
            $name = About::where('user_urls_id',$user)->first()->groom_name;
            $profession = About::where('user_urls_id',$user)->first()->groom_profession;
            $dob = About::where('user_urls_id',$user)->first()->groom_dob;
            $about = About::where('user_urls_id',$user)->first()->groom_about;
            $image = About::where('user_urls_id',$user)->first()->groom_image;
        }elseif($id == "bride"){
            $name = About::where('user_urls_id',$user)->first()->bride_name;
            $profession = About::where('user_urls_id',$user)->first()->bride_profession;
            $dob = About::where('user_urls_id',$user)->first()->bride_dob;
            $about = About::where('user_urls_id',$user)->first()->bride_about;
            $image = About::where('user_urls_id',$user)->first()->bride_image;
        }else{
            return "Wrong Request";
        }
        return view("builder/pages/about-couple/edit", ['name' => $name,'profession' => $profession,'dob' => $dob,'about' => $about,'image' => $image, 'user'=> $url]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
