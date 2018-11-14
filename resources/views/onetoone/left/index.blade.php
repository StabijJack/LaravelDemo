@extends('layouts.app') 

@section("content")
<div class="row">
  @if($oneToOneLefts->count() > 0) 
    @foreach($oneToOneLefts as $oneToOneLeft)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('onetoone.left.submenu')
            @include('onetoone.left.update')
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
@endsection