<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::with('Photos')->get();
        return view('album.index',compact('albums'));
    }

    public function create()
    {
        return view('album.create');
    }

    public function store(Request $request)
    {
        $this->validate($request ,[
            'name' => 'required',
            'cover_image' => 'image|max:1999'
        ]);
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        $fileExt = $request->file('cover_image')->getClientOriginalExtension();
        $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
        //upload image
        $path = $request->file('cover_image')->storeAs('public/album_cover',$fileNameToStore);
        //create alnum here
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $fileNameToStore;

        $album->save();
        return redirect('/album')->with('success','Album Created Successfully');

    }
}
