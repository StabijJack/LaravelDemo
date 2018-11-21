@extends('layouts.app')
@section('content')
    <h1>PolyMorphic Members</h1>
    @foreach ($polymorphicMembers as $polymorphicMember)
        @include('polymorphic.member.submenu')
        <h2>member name: {{ $polymorphicMember->name }}</h2>
        @if ($polymorphicMember->Owner->getTable() == 'polymorphic_owner_lefts')
            <h3>Owner Table LeftName: {{ $polymorphicMember->Owner->leftname }} </h3>
        @else 
            <h3>Owner Table RightName: {{ $polymorphicMember->Owner->rightname }} </h3>
        @endif
    @endforeach
@endsection