@extends('databaserelations.onetoone.home') 
@section('subTitle') Create Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetoone.left.store')
      </div>
    </div>
  </div>
</div>
@endsection