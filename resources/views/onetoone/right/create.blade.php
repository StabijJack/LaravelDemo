@extends('layouts.app') 

@section('title') Create OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.right.submenu')
        @include('onetoone.right.store')
      </div>
    </div>
  </div>
</div>
@endsection