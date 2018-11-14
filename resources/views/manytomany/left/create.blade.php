@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h2>OwnerLeft</h2>
        @include('manytomany.left.submenu')
        @include('manytomany.left.store')
      </div>
    </div>
  </div>
</div>
@endsection