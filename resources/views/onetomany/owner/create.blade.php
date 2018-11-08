@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h2>Owner</h2>
        @include('onetomany.owner.submenu')
        @include('onetomany.owner.store')
      </div>
    </div>
  </div>
</div>
@endsection