@extends('polymorphic.home') 
@section('subTitle') Show Member @endsection
@section('content')
    @include('polymorphic.member.submenu')
    <h2>{{ $polymorphicMember->name }}</h2>
    @if ($polymorphicMember->Owner->getTable() == 'polymorphic_owner_lefts')
        <h3>Owner Table LeftName: {{ $polymorphicMember->Owner->leftname }} </h3>
    @else 
        <h3>Owner Table RightName: {{ $polymorphicMember->Owner->rightname }} </h3>
    @endif
@endsection