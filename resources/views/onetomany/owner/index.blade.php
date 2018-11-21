@extends('onetomany.home') 
@section('subTitle') All Owners @endsection
@section("content")
<div class="row">
  @if($oneToManyOwners->count() > 0) 
    @foreach($oneToManyOwners as $oneToManyOwner)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('onetomany.owner.submenu')
            @include('onetomany.owner.update')
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
@endsection