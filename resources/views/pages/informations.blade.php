@extends('template.welcome')

@section('content')
    <div class="container">
        @foreach($informations as $information)
            <div class="d-flex mt-5">
                <img src="storage/{{$information->img}}" alt="" class="card">
                <div>
                    <a href="/information/{{$information->id}}"><h2>{{$information->name}}</h2></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
