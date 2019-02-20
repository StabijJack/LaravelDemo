@extends('databaserelations.polymorphic.home') 
@section('subTitle') Edit Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.polymorphic.left.submenu')
        @include('databaserelations.polymorphic.left.update')
      </div>
    </div>
  </div>
</div>
@endsection