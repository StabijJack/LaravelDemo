@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.left.submenu')
        @include('onetoone.left.update')
      </div>
    </div>
  </div>
</div>
@endsection