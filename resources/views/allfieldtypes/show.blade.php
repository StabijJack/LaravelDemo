@extends('layouts.app') 

@section('title') show AllFieldTypes @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('allfieldtypes.submenu')
        @include('allfieldtypes.allfields')
      </div>
    </div>
  </div>
</div>
@endsection