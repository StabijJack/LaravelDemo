@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneleft.submenu')
        @include('onetoone.onetooneleft.store')
      </div>
    </div>
  </div>
</div>
@endsection