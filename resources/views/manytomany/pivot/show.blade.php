@extends('manytomany.home') 
@section('subTitle') Show Pivot @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>pivots</h1>
        @include('manytomany.pivot.submenu')
        <p>Owners Left:  {{ $manyToManyPivot->manyToManyOwnerLeft->name }} </p>
        @include('manytomany.pivot.allfields')
        <p>Owners Right:  {{ $manyToManyPivot->manyToManyOwnerRight->course }} </p>
      </div>
    </div>
  </div>
</div>
@endsection