@extends('layouts.app') 

@section('title') Create OneToOneRight @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetoone.onetooneright.submenu')
        <form action="{{ route('oneToOneRight.store') }}" method="POST">
            @csrf
            @include('onetoone.onetooneright.allfields')        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection