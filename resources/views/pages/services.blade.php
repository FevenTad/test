@extends ('layouts.app')

@section('content')
    <ul class="list-group">
        @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
        @endforeach  
    </ul>
       
@endsection