@extends('layouts.app')

@section('content')

  <h1>Create Post</h1>
  <form role="form" action="/posts" method="POST">

      {{csrf_field() }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" class="form-control" id="" cols="30" rows="10" placeholder="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

{{--  <h1>Create Post</h1>
  {!!FORM::open('action'=> 'PostController@store', 'method'=>'POST', 'enctype'=>'multipart/data')!!}
  <div class="form-group">
    {{FORM::label('title','Title')}}
    {{FORM::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
  </div>
  <div class="form-group">
    {{FORM::label('body','Body')}}
    {{FORM::textare('body','',['class'=>'form-control','placeholder'=>'body'])}}
  </div>
  <div class="form-group">
    {{FORM::file('image')}}
  </div>
  {{FORM::submit('Submit',['class' => 'btn btn-primary'])}}
  {{!!FORM::close() !!}}  --}}
  