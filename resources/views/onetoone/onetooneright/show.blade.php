@extends('layouts.app') 

@section('title') Show OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneright.submenu')
        @include('onetoone.onetooneright.update')
        @if($oneToOneLeft->id > 0)
          @include('onetoone.onetooneleft.update')
          @include('onetoone.onetooneleft.destroy')
        @else
          @include('onetoone.onetooneleft.store')
        @endif 
      </div>
    </div>
  </div>
</div>
@endsection