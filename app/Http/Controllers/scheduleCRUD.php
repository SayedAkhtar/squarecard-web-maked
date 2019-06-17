<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\UserUrls;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Url;
use Illuminate\Support\Str;

class scheduleCRUD extends Controller
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
        $schedule = Schedule::where('user_urls_id', $user)->get();
        return view('/builder/pages/schedule/index', ['schedule' => $schedule, 'user'=>$url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $userId = Auth::user()->id;
        $data = new Schedule;

        $data->user_urls_id= $userId;
        $data->event_name= $request->event_name;
        $data->event_start_date= $request->event_start_date;
        $data->event_start_time= $request->event_start_time;
        $data->event_end_date= $request->event_end_date;
        $data->event_end_time= $request->event_end_time;
        $data->event_venue= $request->event_venue;
        $data->event_short_description= $request->event_short_description;
        $data->event_long_description= $request->event_long_description;
        $data->event_note= $request->event_note;
       
        if($request->image != null){
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $name = Str::random(10);
            $image = $request->file('image');
            $input['imagename'] = 'schedule-'.$name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->event_image = $input['imagename'];
        }

        $data->save();
        return redirect("/builder/dashboard/schedule");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user =  Auth::user()->id;
        $url = UserUrls::where('user_id', $user)->first();
        return view("/builder/pages/schedule/add-schedule",['user'=>$url]);
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
        $schedule = Schedule::findOrFail($id);
        return view('/builder/pages/schedule/edit-schedule', ['data' => $schedule]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $userId = Auth::user()->id;
        $data = Schedule::findOrFail($id);

        $data->user_urls_id= $userId;
        $data->event_name= $request->event_name;
        $data->event_start_date= $request->event_start_date;
        $data->event_start_time= $request->event_start_time;
        $data->event_end_date= $request->event_end_date;
        $data->event_end_time= $request->event_end_date;
        $data->event_venue= $request->event_venue;
        $data->event_short_description= $request->event_short_description;
        $data->event_long_description= $request->event_long_description;
        $data->event_note= $request->event_note;
       
        if($request->image != null){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $name = Str::random(10);
            $image = $request->file('image');
            $input['imagename'] = 'schedule-'.$name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->event_image = $input['imagename'];
        }

        $data->save();
        return redirect("/builder/dashboard/schedule");
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
        $data = Schedule::findOrFail($id);
        $data->delete();
        return redirect("/builder/dashboard/schedule/");
    }
}
