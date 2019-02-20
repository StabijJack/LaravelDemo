@extends('databaserelations.manytomany.home') 
@section('subTitle') Create Pivot @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Many To Many</h1>
        @include('databaserelations.manytomany.pivot.submenu')
        @include('databaserelations.manytomany.pivot.store')
      </div>
    </div>
  </div>
</div>
@endsection