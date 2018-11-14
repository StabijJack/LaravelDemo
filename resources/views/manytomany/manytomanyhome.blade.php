@extends('layouts.app') 

@section('title') ManyToMany @endsection
@section("content")
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.index') }}" role="button">Show All ManyToMany OwnersLeft</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.index') }}" role="button">Show All ManyToMany OwnersRight</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyPivot.index') }}" role="button">Show All ManyToMany Pivots</a>
@endsection