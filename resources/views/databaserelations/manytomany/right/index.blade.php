@extends('databaserelations.manytomany.home') 
@section('subTitle') All Owner Right @endsection
@section("content")
<div class="row">
  @if($manyToManyOwnerRights->count() > 0) 
    @foreach($manyToManyOwnerRights as $manyToManyOwnerRight)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('databaserelations.manytomany.right.submenu')
            @include('databaserelations.manytomany.right.update')
            <p>Has currently {{ $manyToManyOwnerRight->manyToManyOwnerLefts()->count() }} members</p>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
@endsection