@extends('layouts.app') 

@section('title') Edit ManyToManyPivot @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Pivot</h1>
        @include('manytomany.pivot.submenu')
        @include('manytomany.pivot.update')
    </div>
  </div>
</div>
@endsection