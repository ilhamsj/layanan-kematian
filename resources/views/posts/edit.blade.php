@extends('layouts.app')

@section('content')
    <form action="{{route('posts.update', $post->id)}}" method="POST" >
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}" id="">
        </div>

        <div class="form-group">
            <label for="body">Body Content</label>
            <textarea class="form-control" name="body" rows="15">{{$post->body}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form> 
@endsection