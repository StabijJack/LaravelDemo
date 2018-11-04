@extends('layouts.app') 

@section('title') Edit AllFieldTypes @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('allfieldtypes.submenu')
        <form action="allFieldTypes/{{ $allFieldTypes->id }}" method="GET">
          @method('PATCH')
          @csrf
          @include('allfieldtypes.allfields')        
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection