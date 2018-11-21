@extends('layouts.app')
@section('content')
    @include('polymorphic.left.submenu')
    <h1>PolyMorphic Owner Left</h1>
    <h2>left: {{ $polymorphicOwnerLeft->leftname }}</h2>
    <h3>members</h3>
    @foreach ($polymorphicOwnerLeft->members()->get() as $polymorphicMember)
        <h4>member name: {{ $polymorphicMember->name }}</h4>
    @endforeach
@endsection