@extends('layouts.app') 

@section('title') Create AllFieldType @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('AllFieldType.submenu')
        <form action="/allFieldType" method="POST">
            @csrf
            @include('allfieldtype.allfields')        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection