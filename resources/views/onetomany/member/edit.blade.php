@extends('onetomany.home') 
@section('subTitle') Edit Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetomany.member.submenu')
        @include('onetomany.member.update')
      </div>
    </div>
  </div>
</div>
@endsection