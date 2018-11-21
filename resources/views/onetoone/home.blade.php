@extends('home') 

@section('title') OneToOne @endsection
@section("submenu")
    <a class="btn btn-primary info" href="{{ route('oneToOneRight.index') }}" role="button">All Right</a>
    <a class="btn btn-primary info" href="{{ route('oneToOneLeft.index') }}" role="button">All Left</a>
    <a class="btn btn-primary info" href="{{ route('oneToOneRight.create') }}" role="button"> New Right</a>

@endsection