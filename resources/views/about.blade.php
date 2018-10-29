@extends("layouts.app")
@section("title")
Acerca de nosotros | Laravel, by SIGMA
@endsection
@section("content")

@foreach($links as $text => $link)
    <a href="{{$link}}" target="_blank">{{$text}}</a>
@endforeach
@endsection