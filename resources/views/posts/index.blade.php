@extends('layouts.app')

@section('content')
<br><br>
    <h1>Posts</h1>
    <hr>
    @if(count($posts)>0)
    <ul class="list-group">
        @foreach($posts as $post)
        <li class='list-group-item'>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-4 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
        </li>
        @endforeach
        
    </ul>
    <div class='container'>
        {{$posts->links()}}
    </div>
    

    @else
    <p>No posts found</p>
    @endif
@endsection