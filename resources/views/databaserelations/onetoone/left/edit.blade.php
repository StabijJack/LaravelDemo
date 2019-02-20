@extends('databaserelations.onetoone.home') 
@section('subTitle') Edit Left @endsection

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetoone.left.submenu')
        @include('databaserelations.onetoone.left.update')
      </div>
    </div>
  </div>
</div>
@endsection