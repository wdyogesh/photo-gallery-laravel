<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::with('Albums')->get();
        $album_ids = Album::pluck('name','id');;
        return view('photo.index', compact('photos','album_ids'));
    }

    public function create()
    {
        return view('photo.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:10000',
        ]);

        $fileNameWithExt = $request->file('photo')->getClientOriginalName();
        $fileExt = $request->file('photo')->getClientOriginalExtension();
        $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
        //upload image
        $path = $request->file('photo')->storeAs('public/photo',$fileNameToStore);

        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->photo = $fileNameToStore;
        $photo->save();
        return redirect('/photo')->with('success','Photo Uploaded Successfully');

    }
    
    
}
