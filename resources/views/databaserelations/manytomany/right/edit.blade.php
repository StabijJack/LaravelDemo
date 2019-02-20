@extends('databaserelations.manytomany.home') 
@section('subTitle') Edit Owner Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.manytomany.right.submenu')
        @include('databaserelations.manytomany.right.update')
        <h2>OwnerLeft</h2>
        <p>Has currently {{ $manyToManyOwnerLefts->count() }} left owners</p>
        <a class="btn btn-primary info" href="{{ route('manyToManyPivot.create',['leftId' => 0, 'rightId' => $manyToManyOwnerRight->id]) }}" role="button">New Connection</a>
        @foreach ($manyToManyOwnerLefts as $manyToManyOwnerLeft)
          @php
              $manyToManyPivot = $manyToManyOwnerLeft->pivot
          @endphp
          @include('databaserelations.manytomany.pivot.updatefields')
          @include('databaserelations.manytomany.pivot.destroy')
          <br>
          @include('databaserelations.manytomany.left.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection