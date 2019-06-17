<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Story;
use App\UserUrls;
use Illuminate\Support\Str;
class storyCRUD extends Controller
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
        $story = Story::where('user_urls_id',$user)->get();
        return view("/builder/pages/story/view-story",['story' => $story, 'user'=> $url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $user = Auth::user()->id;
        $data = new Story;
        $data->user_urls_id = $user;
        $data->story_title = $request->story_title;
        $data->story_venue = $request->story_place;
        $data->story_short_description = $request->about;
        $data->story_date = $request->story_start_date;

        if($request->image != null){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $name = Str::random(10);
            $image = $request->file('image');
            $input['imagename'] = 'story-'.$name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->story_image = $input['imagename'];
        }
        $data->save();
        return redirect("/builder/dashboard/story");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        $user = Auth::user()->id;
        $url = UserUrls::where('user_id', $user)->first();
        return view("builder/pages/story/add-story", ['user'=>$url]);
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
        $story = Story::where('user_urls_id',$user)->where('id',$id)->first();
        // return $story;
        return view("/builder/pages/story/edit-story",['story' => $story]);
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
        $data = Story::findOrFail($id);
        $data->story_title = $request->story_title;
        $data->story_venue = $request->story_place;
        $data->story_short_description = $request->about;
        $data->story_date = $request->story_start_date;

        if($request->image != null){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $name = Str::random(10);
            $image = $request->file('image');
            $input['imagename'] = 'story-'.$name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->story_image = $input['imagename'];
        }
        $data->save();
        return back();

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
    public function destroy(Request $request)
    {
        //
        $data = Story::findOrFail($request->id);
        $data->delete();
        return back();
    }
}
