@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneleft.submenu')
        @include('onetoone.onetooneleft.update')
        @include('onetoone.onetooneright.update')
        @include('onetoone.onetooneright.destroy')
      </div>
    </div>
  </div>
</div>
@endsection