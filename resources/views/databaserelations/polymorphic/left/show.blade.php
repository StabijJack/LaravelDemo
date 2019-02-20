@extends('databaserelations.polymorphic.home') 
@section('subTitle') Show Left @endsection
@section('content')
    @include('databaserelations.polymorphic.left.submenu')
    <h2>{{ $polymorphicOwnerLeft->leftname }}</h2>
    <hr>
    <h3>members</h3>
    @foreach ($polymorphicOwnerLeft->members()->get() as $polymorphicMember)
        <h4>{{ $polymorphicMember->name }}</h4>
    @endforeach
    <hr>
@endsection