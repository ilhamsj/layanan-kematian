@extends('layouts.app')

@section('content')
  <div class="jumbotron">
    <h1 class="display-3">
    </h1>
    <p class="lead">
      Cras justo odio, dapibus ac facilisis in, egestas eget quam.
    </p>
  </div>

  @if (count($posts) > 1)
      @foreach ($posts as $post)
          <div class="row marketing">
            <div class="col">
              <h4>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
              </h4>
            <p>{{$post->body}}</p>
            </div>
          </div>
      @endforeach
      {{$posts->links()}}
  @else
      <h1>No Post Found</h1>
  @endif

@endsection
