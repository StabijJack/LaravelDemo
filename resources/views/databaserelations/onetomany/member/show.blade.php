@extends('databaserelations.onetomany.home') 
@section('subTitle') Show Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetomany.member.submenu')
        @include('databaserelations.onetomany.member.allfields')
        <h2>Owner</h2>
        @include('databaserelations.onetomany.owner.allfields')
      </div>
    </div>
  </div>
</div>
@endsection