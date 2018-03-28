@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Go back</a>
  <h1>{{$post->title}}</h1>
<small>Wrtten on {{$post->created_at}}</small>
  <div>{{$post->body}}</div>
  <hr>
  <div>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    {{--  <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>  --}}
    {{--  {!!FORM::open(['action'=> ['PostController@destroy',$post->id], 'method'=>'POST'])!!}
    {{FORM::hidden('_method','DELETE')}}
    {{FORM::submit('Delete',['class' => 'btn btn-default'])}}
    {{!!FORM::close() !!}}  --}}
    @endif
    @endif
  </div>
@endsection