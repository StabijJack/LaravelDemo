@extends('layouts.app') 

@section('title') Create AllFieldTypes @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('AllFieldTypes.submenu')
        <form action="/allFieldTypes" method="POST">
            @csrf
            @include('allfieldtypes.allfields')        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection