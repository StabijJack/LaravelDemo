@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('polymorphic.right.submenu')
        @include('polymorphic.right.store')
      </div>
    </div>
  </div>
</div>
@endsection