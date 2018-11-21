@extends('onetomany.home') 
@section('subTitle') Create Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetomany.member.store')
      </div>
    </div>
  </div>
</div>
@endsection