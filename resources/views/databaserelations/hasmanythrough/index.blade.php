@extends('databaserelations.hasmanythrough.home') 

@section('title') Show all HasManyThrough @endsection
@section("content")
    @foreach($hasManyThroughTops as $hasManyThroughTop)
        <h2>top {{ $hasManyThroughTop->top }}</h2> <hr>
        @foreach ($hasManyThroughTop->hasManyThroughBottoms()->get() as $hasManyThroughBottom)
            <p>bottom {{ $hasManyThroughBottom->bottom }}  through middle {{ $hasManyThroughBottom->hasManyThroughMiddle->middle }}</p><hr>
        @endforeach
    @endforeach
@endsection