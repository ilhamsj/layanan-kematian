@extends('layouts.app')

@section('content')
  <div class="jumbotron">
    <h1 class="display-3">
    </h1>
    <p class="lead">
      Cras justo odio, dapibus ac facilisis in, egestas eget quam.
    </p>
  </div>

  @if (count($posts) > 0)
      @foreach ($posts as $post)
        <div class="row marketing">
          <div class="col">
            <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
            <p>{{$post->body}}</p>
            
            <form action="{{route('posts.destroy', $post->id)}}" method="post">
              @csrf
              @method('DELETE')
              <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary btn-sm">Edit</a>  
              <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
            </form>

          </div>
        </div>
      @endforeach
      {{$posts->links()}}
  @else
      <h1>No Post Found</h1>
  @endif

@endsection

