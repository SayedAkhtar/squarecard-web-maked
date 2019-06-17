<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registry;
use App\UserUrls;
use Illuminate\Support\Facades\Auth;

class registryCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $url = UserUrls::where('user_id', $id)->first();
        $data = Registry::where('user_urls_id', $id)->get();
        return view('/builder/pages/registry/index', ['data' => $data, 'user'=>$url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        return view('builder/pages/registry/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $id = Auth::user()->id;
        $data = new Registry();
        $data->user_urls_id =$id;
        $data->register_name =$request->register_name;
        $data->register_url =$request->register_url;
        if($request->has('image')){
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,svg,jpg,gif|max: 5048',
            ]);
            $img = $request->file('image');
            $file = $img->getClientOriginalName();
            $destinationPath = public_path('/images');
            $img->move($destinationPath, $file);

            $data->register_image = $file;

        }
        $data->save();
        return redirect('/builder/dashboard/registry');
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
        $data = Registry::find($id);
        return view('builder/pages/registry/edit',['data' => $data, 'user'=>$url]);
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
        $data = Registry::find($id);
        // return $request;
        $data->register_name =$request->register_name;
        $data->register_url =$request->register_url;
        if($request->has('image')){
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,svg,jpg,gif|max: 5048',
            ]);
            $img = $request->file('image');
            $file = $img->getClientOriginalName();
            $destinationPath = public_path('/images');
            $img->move($destinationPath, $file);

            $data->register_image = $file;

        }
        $data->save();
        return back($status = 302);
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
        $data = Registry::find($request->id);
        $data->delete();
        return back();
    }
}
