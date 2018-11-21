@extends('onetomany.home') 
@section('subTitle') Create Owner @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetomany.owner.store')
      </div>
    </div>
  </div>
</div>
@endsection