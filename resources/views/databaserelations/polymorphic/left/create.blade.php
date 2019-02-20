@extends('databaserelations.polymorphic.home') 
@section('subTitle')create Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.polymorphic.left.store')
      </div>
    </div>
  </div>
</div>
@endsection