@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h2>OwnerRight</h2>
        @include('manytomany.right.submenu')
        @include('manytomany.right.store')
      </div>
    </div>
  </div>
</div>
@endsection