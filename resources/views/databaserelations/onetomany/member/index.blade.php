@extends('databaserelations.onetomany.home') 
@section('subTitle') All Members @endsection
@section("content")
<div class="row">
  @foreach($oneToManyMembers as $oneToManyMember)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('databaserelations.onetomany.member.submenu')
          @include('databaserelations.onetomany.member.update')
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection