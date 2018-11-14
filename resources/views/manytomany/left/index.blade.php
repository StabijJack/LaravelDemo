@extends('layouts.app') 

@section("content")
<h2>OwnersLeft</h2>
<div class="row">
  @if($manyToManyOwnerLefts->count() > 0) 
    @foreach($manyToManyOwnerLefts as $manyToManyOwnerLeft)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('manytomany.left.submenu')
            @include('manytomany.left.update')
            <p>Has currently {{ $manyToManyOwnerLeft->manyToManyOwnerRights()->count() }} members</p>

          </div>
        </div>
      </div>
    @endforeach
  @else
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.create') }}" role="button">New</a>
  @endif
</div>
@endsection