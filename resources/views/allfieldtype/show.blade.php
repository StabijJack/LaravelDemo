@extends('layouts.app') 

@section('title') show AllFieldType @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('allfieldtype.submenu')
        @include('allfieldtype.allfields')
      </div>
    </div>
  </div>
</div>
@endsection