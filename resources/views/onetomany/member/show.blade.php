@extends('onetomany.home') 
@section('subTitle') Show Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetomany.member.submenu')
        @include('onetomany.member.allfields')
        <h2>Owner</h2>
        @include('onetomany.owner.allfields')
      </div>
    </div>
  </div>
</div>
@endsection