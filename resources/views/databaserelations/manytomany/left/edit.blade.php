@extends('databaserelations.manytomany.home') 
@section('subTitle') Edit Owner Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.manytomany.left.submenu')
        @include('databaserelations.manytomany.left.update')
        <h2>OwnerRight</h2>
        <p>Has currently {{ $manyToManyOwnerRights->count() }} right owners</p>
        <a class="btn btn-primary info" href="{{ route('manyToManyPivot.create', ['leftId' => $manyToManyOwnerLeft->id , 'rightId' => 0]) }}" role="button">New Connection</a>
        @foreach ($manyToManyOwnerRights as $manyToManyOwnerRight)
          @php
              $manyToManyPivot = $manyToManyOwnerRight->pivot
          @endphp
          @include('databaserelations.manytomany.pivot.updatefields')
          @include('databaserelations.manytomany.pivot.destroy')
          <br>
          @include('databaserelations.manytomany.right.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection