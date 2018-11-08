@extends('layouts.app') 

@section('title') OneToMany @endsection
@section("content")
    <a class="btn btn-primary info" href="{{ route('oneToManyMember.index') }}" role="button">Show All OneToMany Members</a>
    <a class="btn btn-primary info" href="{{ route('oneToManyOwner.index') }}" role="button">Show All OneToMany Owners</a>
@endsection