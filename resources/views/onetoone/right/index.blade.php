@extends('onetoone.home') 
@section('subTitle') All Right @endsection
@section("content")
<div class="row">
  @foreach($oneToOneRights as $oneToOneRight)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('onetoone.right.submenu')
          @include('onetoone.right.update')
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection