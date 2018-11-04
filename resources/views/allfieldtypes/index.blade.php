@extends('layouts.app') 

@section('title') Show all AllFieldTypes @endsection
@section("content")
<div class="row">
@foreach($allFieldTypesS as $allFieldTypes)
  <div class="col-3">
    <div class="card">
      <div class="card-body">
        @include('allfieldtypes.submenu')
        @include('allfieldtypes.allfields')
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection