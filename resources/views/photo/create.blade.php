@extends('layouts.app')
@section('content')
    <h3>Insert Photos</h3>
    {!! Form::open(['action' => 'PhotosController@store', 'method' => 'post' , 'enctype'=>'multipart/form-data']) !!}
    @foreach($album_ids as $album_id)
        {{ Form::bsSelect('album_id', $album_id, null, ['class' => 'form-controller']) }}
    @endforeach
    {{Form::bsText('title','',['placeholder'=>'Enter Photo title'])}}
    {{Form::bsTextArea('description','',['placeholder'=>'Description !! '])}}
    {{Form::bsFile('photo')}}
    {{Form::bsSubmit('submit')}}
    {!! Form::close() !!}
@endsection
