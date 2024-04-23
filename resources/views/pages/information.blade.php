@extends('template.welcome')

@section('content')
    <div class="container">
            <div class="mt-5">
                <img src="../storage/{{$information[0]->img}}" alt="">
                <div>
                    {!! $information[0]->description !!}
                </div>
            </div>
    </div>
@endsection
