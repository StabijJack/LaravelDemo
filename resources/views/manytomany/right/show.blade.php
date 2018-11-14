@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h2>OwnerRight</h2>
        @include('manytomany.right.submenu')
        @include('manytomany.right.allfields')
        <h2>Members</h2>
        <p>Has currently {{ $manyToManyOwnerLefts->count() }} members</p>
        @foreach ($manyToManyOwnerLefts as $manyToManyOwnerLeft)
        @php
            $manyToManyPivot = $manyToManyOwnerLeft->pivot
        @endphp
        @include('manytomany.pivot.allfields')
        <br>
        @include('manytomany.left.allfields')
      @endforeach
    </div>
    </div>
  </div>
</div>
@endsection