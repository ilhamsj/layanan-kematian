@extends('layouts.app')

@section('content')

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h4>
            <small>{{$post->created_at}}</small>
            <p>{{$post->body}}</p>
        </div>
    </div>

@endsection
