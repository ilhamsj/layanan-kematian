@extends('layouts.app')

@section('content')
  <div class="jumbotron">
    <h1 class="display-3">{{$title}}</h1>
    <p class="lead">
      Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
    </p>
  </div>

  <div class="row marketing">
    <div class="col-lg-6">
      <h4>Android Application</h4>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

      <h4>Mobile Web Application</h4>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

      <h4>Desktop Application</h4>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
    </div>

    <div class="col-lg-6">
      <h4>Cross Platform</h4>
      <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
    </div>
  </div>
@endsection
