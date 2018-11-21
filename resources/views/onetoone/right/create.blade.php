@extends('onetoone.home') 
@section('subTitle') Create Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.right.store')
      </div>
    </div>
  </div>
</div>
@endsection