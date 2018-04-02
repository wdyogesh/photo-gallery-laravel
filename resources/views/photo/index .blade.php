@extends('layouts.app')
@section('content')
    <h3>Photos List</h3>
    <div class="row">
        @forelse ($photos as $photo)
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="{{url('/album')}}/{{$photo->id}}">
                    {{$photo->name}}
                    <img width="300px" class="thumbnail" src="storage/album_cover/{{$photo->cover_image}}" alt="{{$photo->name}}">
                </a>

            </div>
        @empty
            <p>No album Available Here</p>
        @endforelse
    </div>
@endsection