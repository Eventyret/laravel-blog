@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small><br>
    <a href="/posts" class="btn btn-default">Go Back</a> | <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
@endsection