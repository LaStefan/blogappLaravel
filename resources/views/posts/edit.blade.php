@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            <hr>
        <a href="/dashboard" class="btn btn-primary">Cancel</a>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection