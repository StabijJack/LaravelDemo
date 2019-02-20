@extends('databaserelations.onetoone.home') 
@section('subTitle') Edit Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetoone.right.submenu')
        @include('databaserelations.onetoone.right.update')
      </div>
    </div>
  </div>
</div>
@endsection