@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>OwnerLeft</h1>
        @include('manytomany.left.submenu')
        @include('manytomany.left.update')
        <h2>Members</h2>
        <p>Has currently {{ $manyToManyOwnerRights->count() }}members</p>
        <a class="btn btn-primary info" href="{{ route('manyToManyPivot.create', ['leftId' => $manyToManyOwnerLeft->id , 'rightId' => 0]) }}" role="button">New Connection</a>
        @foreach ($manyToManyOwnerRights as $manyToManyOwnerRight)
          @php
              $manyToManyPivot = $manyToManyOwnerRight->pivot
          @endphp
          @include('manytomany.pivot.updatefields')
          @include('manytomany.pivot.destroy')
          <br>
          @include('manytomany.right.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection