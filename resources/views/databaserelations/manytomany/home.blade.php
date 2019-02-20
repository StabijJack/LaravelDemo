@extends('databaserelations.home') 

@section('title') ManyToMany @endsection
@section("submenu")
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.index') }}" role="button">Owners Left</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.index') }}" role="button">Owners Right</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyPivot.index') }}" role="button">Pivots</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.create') }}" role="button">New Owner Left</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.create') }}" role="button">New Owner Right</a>
    <a class="btn btn-primary info" href="{{ route('manyToManyPivot.create') }}" role="button">New Pivot</a>
    <hr>
@endsection
