@extends('layouts.app') 

@section('title') PolyMorphic @endsection
@section("content")
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.index') }}" role="button">Show All PolyMorphic Left</a>
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.create') }}" role="button"> New Left</a>

    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.index') }}" role="button">Show All PolyMorphic Right</a>
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.create') }}" role="button"> New Right</a>

    <a class="btn btn-primary info" href="{{ route('polymorphicMember.index') }}" role="button">Show All PolyMorphic Member</a>
    <a class="btn btn-primary info" href="{{ route('polymorphicMember.create') }}" role="button">New Member</a>
<hr>
<h1>maak gebruik van <a href="https://github.com/shiftonelabs/laravel-cascade-deletes">https://github.com/shiftonelabs/laravel-cascade-deletes</a>
</h1>
@endsection