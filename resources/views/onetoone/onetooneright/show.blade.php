@extends('layouts.app') 

@section('title') Show OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneright.submenu')
        @include('onetoone.onetooneright.allfields')  
        @if($oneToOneLeft)
          @include('onetoone.onetooneleft.allfields')       
        @endif 
      </div>
    </div>
  </div>
</div>
@endsection