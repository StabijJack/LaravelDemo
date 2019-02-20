@extends('databaserelations.polymorphic.home') 
@section('subTitle') Edit Right @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Member</h1>
        @include('databaserelations.polymorphic.right.submenu')
        @include('databaserelations.polymorphic.right.update')
      </div>
    </div>
  </div>
</div>
@endsection