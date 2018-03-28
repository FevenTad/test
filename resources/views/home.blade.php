@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Post</h3>
                </div>
                @if(count($posts)>0)
                <table class="table table-stripped">
                @foreach($posts as $post)
                <tr>
                    <th>{{$post->title}}</th>
                    <hr>
                    <th><a href="/posts/{{$post->id}}/edit">Edit</a></th>
                    {{--  {!!FORM::open('action'=> ['PostController@destroy',$post->id], 'method'=>'POST')!!}
                    {{FORM::hidden('_method','DELETE')}}
                    {{FORM::submit('Delete',['class' => 'btn btn-default'])}}
                    {{!!FORM::close() !!}}  --}}
                </tr>
                @endforeach
            </table>
                @else
                <p>no Posts yet</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
