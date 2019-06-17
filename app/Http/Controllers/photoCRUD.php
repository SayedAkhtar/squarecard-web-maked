<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\PhotoAlbum;
use App\Photo;

class photoCRUD extends Controller
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
        // $data = PhotoAlbum::where('user_urls_id', $user)->get();
        $data = Photo::where('user_urls_id', $user)->get();
        // return $data;
        return view("builder/pages/photo/photo-list", ["data" => $data,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        if($request->hasFile('image')){
            foreach ($request->file('image') as $data) {
                $this->validate($request, [
                    'image[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
                ]);
                $filename = $data->getClientOriginalName(); 
                $fileext = $data->getClientOriginalExtension();
                $file = $filename.".".$fileext;
                $destinationPath = public_path('/images');
                $data->move($destinationPath, $file);
                $photo = new Photo;
                $photo->album_id = 1;
                $photo->image = $file;
                $photo->user_urls_id = Auth::user()->id;
                $photo->save();
            }
            return Redirect::back();
        }
        else{
            return Redirect::back()->withErrors(['Max file size allowed is 10MB']);
        }
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
        $data = Photo::where('album_id', $id)->get();
        return view("builder/pages/photo/photo-list",['data'=>$data]);
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
    public function destroy(Request $request)
    {
        //
        $user = Auth::user()->id;
        $id = $request->id;
        // if($request->type == 'album'){
        //     $data = PhotoAlbum::find($id);
        //     $data->delete();
        //     return $this->index();
        // }
        // elseif($request->type == 'single'){
            $data = Photo::find($id);
            $data->delete();
            return back();
        // }
        // else{

        // }        
    }
}
