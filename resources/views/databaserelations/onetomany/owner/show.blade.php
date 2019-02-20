@extends('databaserelations.onetomany.home') 
@section('subTitle') Show Owner @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetomany.owner.submenu')
        @include('databaserelations.onetomany.owner.allfields')
        <h2>Members</h2>
        @foreach ($oneToManyMembers as $oneToManyMember)
            @include('databaserelations.onetomany.member.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection