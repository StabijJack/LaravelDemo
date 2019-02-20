@extends('databaserelations.manytomany.home') 
@section('subTitle') Show Owner Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.manytomany.left.submenu')
        @include('databaserelations.manytomany.left.allfields')
        <h2>OwnerRight</h2>
        <p>Has currently {{ $manyToManyOwnerRights->count() }} right owners</p>
        @foreach ($manyToManyOwnerRights as $manyToManyOwnerRight)
          @php
              $manyToManyPivot = $manyToManyOwnerRight->pivot
          @endphp
          @include('databaserelations.manytomany.pivot.allfields')
          <br>
          @include('databaserelations.manytomany.right.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection