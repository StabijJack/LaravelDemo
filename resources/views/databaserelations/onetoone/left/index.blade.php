@extends('databaserelations.onetoone.home') 
@section('subTitle') All Left @endsection
@section("content")
<div class="row">
  @foreach($oneToOneLefts as $oneToOneLeft)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('databaserelations.onetoone.left.submenu')
          @include('databaserelations.onetoone.left.update')
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection