@extends('polymorphic.home') 
@section('subTitle') Edit Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('polymorphic.left.submenu')
        @include('polymorphic.left.update')
      </div>
    </div>
  </div>
</div>
@endsection