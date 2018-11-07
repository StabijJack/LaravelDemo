@extends('layouts.app') 

@section('title') Show OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneright.submenu')
        @include('onetoone.onetooneright.update')
        @if($oneToOneLeft)
          @include('onetoone.onetooneleft.update')
          @include('onetoone.onetooneleft.destroy')
        @else
          <a class="btn btn-primary info" href="{{ route('oneToOneLeft.create') }}" role="button"> New</a>
        @endif 
      </div>
    </div>
  </div>
</div>
@endsection