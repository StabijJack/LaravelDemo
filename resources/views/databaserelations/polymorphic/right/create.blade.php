@extends('databaserelations.polymorphic.home') 
@section('subTitle')create Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.polymorphic.right.store')
      </div>
    </div>
  </div>
</div>
@endsection