@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>OwnerRight</h1>
        @include('manytomany.right.submenu')
        @include('manytomany.right.update')
        <h2>Members</h2>
        <p>Has currently {{ $manyToManyOwnerLefts->count() }} members</p>
        <a class="btn btn-primary info" href="{{ route('manyToManyPivot.create',['leftId' => 0, 'rightId' => $manyToManyOwnerRight->id]) }}" role="button">New Connection</a>
        @foreach ($manyToManyOwnerLefts as $manyToManyOwnerLeft)
          @php
              $manyToManyPivot = $manyToManyOwnerLeft->pivot
          @endphp
          @include('manytomany.pivot.updatefields')
          @include('manytomany.pivot.destroy')
          <br>
          @include('manytomany.left.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection