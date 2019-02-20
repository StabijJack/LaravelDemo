@extends('databaserelations.onetoone.home') 
@section('subTitle') All Right @endsection
@section("content")
<div class="row">
  @foreach($oneToOneRights as $oneToOneRight)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('databaserelations.onetoone.right.submenu')
          @include('databaserelations.onetoone.right.update')
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection