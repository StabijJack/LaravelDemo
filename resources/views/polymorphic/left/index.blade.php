@extends('polymorphic.home') 
@section('subTitle') All Left @endsection
@section('content')
    @foreach ($polymorphicOwnerLefts as $polymorphicOwnerLeft)
        @include('polymorphic.left.submenu')
        <h2>{{ $polymorphicOwnerLeft->leftname }}</h2>
        <hr>
        <h3>members</h3>
        @foreach ($polymorphicOwnerLeft->members()->get() as $polymorphicMember)
            <h4>{{ $polymorphicMember->name }}</h4>
        @endforeach
        <hr>
    @endforeach
@endsection