@extends('onetoone.home') 
@section('subTitle') Show Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.right.submenu')
        @include('onetoone.right.update')
        @if($oneToOneLeft->id > 0)
          @include('onetoone.left.update')
          @include('onetoone.left.destroy')
        @else
          @include('onetoone.left.store')
        @endif 
      </div>
    </div>
  </div>
</div>
@endsection