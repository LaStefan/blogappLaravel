@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    
    <div class="container">
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <a href="/posts" class="btn btn-primary">Cancel</a>
        <hr>
        {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
        </div>
       
</div>
@endsection