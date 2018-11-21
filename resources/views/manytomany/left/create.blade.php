@extends('manytomany.home') 
@section('subTitle') Create Owner Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('manytomany.left.store')
      </div>
    </div>
  </div>
</div>
@endsection