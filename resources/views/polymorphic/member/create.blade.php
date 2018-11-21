@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('polymorphic.member.submenu')
        @include('polymorphic.member.store')
      </div>
    </div>
  </div>
</div>
@endsection