@extends('template.welcome')
@section('content')
    <div class="container">
        @foreach($news as $new)
            <div class="d-flex mt-5">
                <img src="storage/{{$new->img}}" alt="" class="card">
                <div>
                    <a href="/new/{{$new->id}}"><h2>{{$new->name}}</h2></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
