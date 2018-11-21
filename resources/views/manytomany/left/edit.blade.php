@extends('manytomany.home') 
@section('subTitle') Edit Owner Left @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('manytomany.left.submenu')
        @include('manytomany.left.update')
        <h2>OwnerRight</h2>
        <p>Has currently {{ $manyToManyOwnerRights->count() }} right owners</p>
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