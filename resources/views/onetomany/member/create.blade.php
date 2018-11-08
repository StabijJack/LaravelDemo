@extends('layouts.app') 

@section('title') Create OneToMany Member @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Member</h1>
        @include('onetomany.member.submenu')
        @include('onetomany.member.store')
      </div>
    </div>
  </div>
</div>
@endsection