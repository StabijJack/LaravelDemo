@extends('layouts.app') 

@section('title') OneToOne @endsection
@section("content")
    <a class="btn btn-primary info" href="{{ route('oneToOneRight.index') }}" role="button">Show All OneToOne Right</a>
    <a class="btn btn-primary info" href="{{ route('oneToOneLeft.index') }}" role="button">Show All OneToOne Left</a>

    {{-- <div class="row">
        @yield('onetooneleft')
    </div>
    <div class="row">
        @yield('onetooneright')
    </div> --}}
@endsection