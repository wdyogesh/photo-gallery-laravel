@extends('layouts.app')

@section('content')
    <h3>Create Albums</h3>
    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'post' , 'enctype'=>'multipart/form-data']) !!}
    	{{Form::bsText('name','',['placeholder'=>'Enter Album Name'])}}
    	{{Form::bsTextArea('description','',['placeholder'=>'Description !! '])}}
        {{Form::bsFile('cover_image')}}
        {{Form::bsSubmit('submit')}}
    {!! Form::close() !!}
@endsection