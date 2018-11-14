@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h2>OwnerLeft</h2>
        @include('manytomany.left.submenu')
        @include('manytomany.left.allfields')
        <h2>Members</h2>
        <p>Has currently {{ $manyToManyOwnerRights->count() }}members</p>
        @foreach ($manyToManyOwnerRights as $manyToManyOwnerRight)
          @php
              $manyToManyPivot = $manyToManyOwnerRight->pivot
          @endphp
          @include('manytomany.pivot.allfields')
          <br>
          @include('manytomany.right.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection