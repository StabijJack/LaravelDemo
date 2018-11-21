@extends('manytomany.home') 
@section('subTitle') Show Owner Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('manytomany.right.submenu')
        @include('manytomany.right.allfields')
        <h2>OwnerLeft</h2>
        <p>Has currently {{ $manyToManyOwnerLefts->count() }} left owners</p>
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