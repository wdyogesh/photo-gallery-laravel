@extends('layouts.app')

@section('content')
<h3>Albums</h3>

    <div class="row">
        @forelse ($albums as $album)
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="{{url('/album')}}/{{$album->id}}">
                    {{$album->name}}
                    <img width="300px" class="thumbnail" src="storage/album_cover/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>

            </div>
        @empty
            <p>No album Available Here</p>
        @endforelse

    </div>

@endsection