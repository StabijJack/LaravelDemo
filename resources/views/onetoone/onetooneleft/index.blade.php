@extends('layouts.app') 

@section("content")
<div class="row">
  @if($oneToOneLefts->count() > 0) 
    @foreach($oneToOneLefts as $oneToOneLeft)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('onetoone.onetooneleft.submenu')
            @include('onetoone.onetooneleft.update')
          </div>
        </div>
      </div>
    @endforeach
  @else 
    <a class="btn btn-primary info" href="{{ route('oneToOneLeft.create') }}" role="button"> New</a>
  @endif
</div>
@endsection