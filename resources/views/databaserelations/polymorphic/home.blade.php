@extends('databaserelations.home') 

@section('title') PolyMorphic @endsection
@section("submenu")
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.index') }}" role="button"> Left</a>
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.create') }}" role="button"> New Left</a>

    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.index') }}" role="button"> Right</a>
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.create') }}" role="button"> New Right</a>

    <a class="btn btn-primary info" href="{{ route('polymorphicMember.index') }}" role="button"> Member</a>
    <a class="btn btn-primary info" href="{{ route('polymorphicMember.create') }}" role="button">New Member</a>
<hr>
<p>maak gebruik van 
    <a href="https://github.com/shiftonelabs/laravel-cascade-deletes">https://github.com/shiftonelabs/laravel-cascade-deletes</a>
</p>
<hr>
@endsection