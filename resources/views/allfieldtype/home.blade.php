@extends('home') 

@section('title') AllFieldTypes @endsection
@section("submenu")
    <a class="btn btn-primary info" href="{{ route('allFieldType.index') }}" role="button">Show All</a>
    <a class="btn btn-primary info" href="{{ route('allFieldType.create') }}" role="button"> New</a>

    <hr>
@endsection
