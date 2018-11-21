@extends('layouts.app')
@section('content')
    <h1>PolyMorphic Owner Right</h1>
    @foreach ($polymorphicOwnerRights as $polymorphicOwnerRight)
        @include('polymorphic.right.submenu')
        <h2>right: {{ $polymorphicOwnerRight->rightname }}</h2>
        <h3>members</h3>
        @foreach ($polymorphicOwnerRight->members()->get() as $polymorphicMember)
            <h4>member name: {{ $polymorphicMember->name }}</h4>
        @endforeach
    @endforeach
@endsection