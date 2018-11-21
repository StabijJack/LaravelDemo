@extends('manytomany.home') 
@section('subTitle') Create Owner Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('manytomany.right.store')
      </div>
    </div>
  </div>
</div>
@endsection