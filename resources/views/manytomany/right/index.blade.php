@extends('layouts.app') 

@section("content")
<h2>OwnersRight</h2>
<div class="row">
  @if($manyToManyOwnerRights->count() > 0) 
    @foreach($manyToManyOwnerRights as $manyToManyOwnerRight)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('manytomany.right.submenu')
            @include('manytomany.right.update')
            <p>Has currently {{ $manyToManyOwnerRight->manyToManyOwnerLefts()->count() }} members</p>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
@endsection