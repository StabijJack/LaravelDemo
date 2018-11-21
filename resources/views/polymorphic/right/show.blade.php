@extends('polymorphic.home') 
@section('subTitle') Show Right @endsection
@section('content')
    @include('polymorphic.right.submenu')
    <h2>{{ $polymorphicOwnerRight->rightname }}</h2>
    <hr>
    <h3>members</h3>
    @foreach ($polymorphicOwnerRight->members()->get() as $polymorphicMember)
        <h4>{{ $polymorphicMember->name }}</h4>
    @endforeach
    <hr>
@endsection