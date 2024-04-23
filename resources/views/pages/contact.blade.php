@extends('template.welcome')
@section('content')
    <div class="container">
        {!! $contact[0]->description !!}
    </div>
@endsection
