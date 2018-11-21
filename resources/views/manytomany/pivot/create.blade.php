@extends('manytomany.home') 
@section('subTitle') Create Pivot @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Many To Many</h1>
        @include('manytomany.pivot.submenu')
        @include('manytomany.pivot.store')
      </div>
    </div>
  </div>
</div>
@endsection