@extends('onetoone.home') 
@section('subTitle') Show Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.left.submenu')
        @include('onetoone.left.update')
        @include('onetoone.right.update')
      </div>
    </div>
  </div>
</div>
@endsection