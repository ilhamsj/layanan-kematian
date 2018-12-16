@extends('layouts.app')

@section('content')

    <div class="col">
        <h4>
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </h4>
        <small>{{$post->created_at}}</small>
        <p>{{$post->body}}</p>
    </div>

@endsection
