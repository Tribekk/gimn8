@extends('template.welcome')
@section('content')
    <div class="container">
        <div class="mt-5">
            <img src="../storage/{{$new[0]->img}}" alt="">
            <div>
                {!! $new[0]->description !!}
            </div>
        </div>
    </div>
@endsection
