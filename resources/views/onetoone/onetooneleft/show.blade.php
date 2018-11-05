@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneleft.submenu')
        @include('onetoone.onetooneleft.allfields')  
        @include('onetoone.onetooneright.show')      
      </div>
    </div>
  </div>
</div>
@endsection