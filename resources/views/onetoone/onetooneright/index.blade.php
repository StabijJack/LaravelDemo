@extends('layouts.app') 

@section('title') Show all OneToOneRight @endsection
@section("content")
<div class="row">
  @if($oneToOneRights->count() > 0) 
    @foreach($oneToOneRights as $oneToOneRight)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('onetoone.onetooneright.submenu')
            @include('onetoone.onetooneright.allfields')
          </div>
        </div>
      </div>
    @endforeach
  @else 
    <a class="btn btn-primary info" href="{{ route('oneToOneRight.create') }}" role="button"> New</a>
  @endif
</div>
@endsection