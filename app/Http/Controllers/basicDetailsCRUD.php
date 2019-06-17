<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BasicDetails;
use App\UserUrls;

class basicDetailsCRUD extends Controller
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
        $id = Auth::user()->id;
        $url = UserUrls::where('user_id', $id)->first();
        $details = BasicDetails::where('user_urls_id', $id)->first();
        return view('builder/pages/basicDetails/index',['details' => $details, 'user'=>$url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        // return "hi";
        $user = Auth::user()->id;
        $data = BasicDetails::where('user_urls_id', $user)->first();
        $url = UserUrls::where('user_id', $user)->first();
        $data->event_name = $request->event_name;
        $data->event_date = $request->event_date;
        $data->bride_name = $request->bride_name;
        $data->groom_name = $request->groom_name;
        $data->venue = $request->event_venue;
        $data->about = $request->event_about;
        if($request->cover_image != null){
            $this->validate($request, [
                'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image = $request->file('cover_image');
            $input['imagename'] = $user.'-cover'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->cover_image = $input['imagename'];
        }
        $data->save();
        return redirect("/builder/dashboard/basic-details",['user'=>$url]);
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
