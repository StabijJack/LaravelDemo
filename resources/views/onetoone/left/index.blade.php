@extends('onetoone.home') 
@section('subTitle') All Left @endsection
@section("content")
<div class="row">
  @foreach($oneToOneLefts as $oneToOneLeft)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('onetoone.left.submenu')
          @include('onetoone.left.update')
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection