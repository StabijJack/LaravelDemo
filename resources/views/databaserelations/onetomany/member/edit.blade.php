@extends('databaserelations.onetomany.home') 
@section('subTitle') Edit Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetomany.member.submenu')
        @include('databaserelations.onetomany.member.update')
      </div>
    </div>
  </div>
</div>
@endsection