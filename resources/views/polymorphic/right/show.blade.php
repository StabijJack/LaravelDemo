@extends('layouts.app')
@section('content')
    @include('polymorphic.right.submenu')
    <h1>PolyMorphic Owner Right</h1>
    <h2>right: {{ $polymorphicOwnerRight->rightname }}</h2>
    <h3>members</h3>
    @foreach ($polymorphicOwnerRight->members()->get() as $polymorphicMember)
        <h4>member name: {{ $polymorphicMember->name }}</h4>
    @endforeach
@endsection