@extends('manytomany.home') 
@section('subTitle') All Pivots @endsection
@section("content")
<div class="row">
  @foreach($manyToManyPivots as $manyToManyPivot)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('manytomany.pivot.submenu')
          <p>Owners Left:  {{ $manyToManyPivot->manyToManyOwnerLeft->name }} </p>
          @include('manytomany.pivot.allfields')
          <p>Owners Right:  {{ $manyToManyPivot->manyToManyOwnerRight->course }} </p>
          </div>
      </div>
    </div>
  @endforeach
</div>
@endsection