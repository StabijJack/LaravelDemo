@extends('databaserelations.polymorphic.home') 
@section('subTitle') Edit Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Member</h1>
        @include('databaserelations.polymorphic.member.submenu')
        @include('databaserelations.polymorphic.member.update')
      </div>
    </div>
  </div>
</div>
@endsection