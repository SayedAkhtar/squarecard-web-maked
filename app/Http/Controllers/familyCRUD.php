<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Family;
use App\UserUrls;
use Illuminate\Support\Str;

class familyCRUD extends Controller
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
        $groom = Family::where('bride_groom', 'groom')->where('user_urls_id', $user)->get();
        $bride = Family::where('bride_groom', 'bride')->where('user_urls_id', $user)->get();
        return view('builder/pages/family/index',['groom' => $groom, 'bride' => $bride, 'user'=>$url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $userid = Auth::user()->id;
        $data = new Family();
        $url = UserUrls::where('user_id', $userid)->first();
        $data->user_urls_id = $userid;
        $data->relation_name = $request->relation;
        $data->name = $request->full_name;
        $data->profession = $request->profession;
        $data->maritial_status = $request->maritial_status;
        $data->maritial_status = $request->maritial_status;
        $data->bride_groom = $request->bride_groom;
        $data->about = $request->about;
        if($request->image != null){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $name = Str::random(15);
            $image = $request->file('image');
            $input['imagename'] = 'family-'.$name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->image = $input['imagename'];
        }

        $data->save();
        return redirect("/builder/dashboard/family-details");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
        // return $request->full_name;
        return $request;
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
        $data = Family::where('id', $id)->first();
        // return $data;
        return view('builder/pages/family/family-edit', ['data' => $data, 'user'=>$url]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        $user = Auth::user()->id;
        $url = UserUrls::where('user_id', $user)->first();
        return view("builder/pages/family/family-add",['user'=>$url]);
    }

    public function edit(Request $request,$id)
    {
        //
        $data = Family::findOrFail($id);

        $data->relation_name = $request->relation;
        $data->name = $request->full_name;
        $data->profession = $request->profession;
        $data->maritial_status = $request->maritial_status;
        $data->maritial_status = $request->maritial_status;
        $data->bride_groom = $request->bride_groom;
        $data->about = $request->about;
        if($request->image != null){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $name = Str::random(15);
            $image = $request->file('image');
            $input['imagename'] = 'family-'.$name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $data->image = $input['imagename'];
        }

        $data->save();
        return redirect("/builder/dashboard/family-details");
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
        $data = Family::findOrfail($id);
        $data->delete();
        return redirect("/builder/dashboard/family-details");
    }
}
