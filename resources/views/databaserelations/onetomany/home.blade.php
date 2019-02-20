@extends('databaserelations.home') 

@section('title') OneToMany @endsection
@section("submenu")
    <a class="btn btn-primary info" href="{{ route('oneToManyOwner.index') }}" role="button">Owners</a>
    <a class="btn btn-primary info" href="{{ route('oneToManyMember.index') }}" role="button">Members</a>
    <a class="btn btn-primary info" href="{{ route('oneToManyOwner.create') }}" role="button">New Owner</a>
    <hr>
@endsection
