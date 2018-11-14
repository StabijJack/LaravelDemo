@extends('layouts.app') 

@section('title') Edit OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.right.submenu')
        @include('onetoone.right.update')
      </div>
    </div>
  </div>
</div>
@endsection