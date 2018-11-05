@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneleft.submenu')
        <form action="{{ route('oneToOneLeft.store') }}" method="POST">
            @csrf
            @include('onetoone.onetooneleft.allfields')        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection