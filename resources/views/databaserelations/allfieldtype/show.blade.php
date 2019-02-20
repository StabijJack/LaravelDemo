@extends('databaserelations.allfieldtype.home') 

@section('subTitle') Show @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.allfieldtype.submenu')
        @include('databaserelations.allfieldtype.allfields')
      </div>
    </div>
  </div>
</div>
@endsection