@extends('databaserelations.onetoone.home') 
@section('subTitle') Show Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetoone.right.submenu')
        @include('databaserelations.onetoone.right.update')
        @if($oneToOneLeft->id > 0)
          @include('databaserelations.onetoone.left.update')
          @include('databaserelations.onetoone.left.destroy')
        @else
          @include('databaserelations.onetoone.left.store')
        @endif 
      </div>
    </div>
  </div>
</div>
@endsection