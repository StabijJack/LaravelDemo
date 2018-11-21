@extends('layouts.app') 

@section('title') Edit OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Member</h1>
        @include('polymorphic.left.submenu')
        @include('polymorphic.left.update')
      </div>
    </div>
  </div>
</div>
@endsection