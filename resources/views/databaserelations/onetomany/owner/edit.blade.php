@extends('databaserelations.onetomany.home') 
@section('subTitle') Edit Owner @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.onetomany.owner.submenu')
        @include('databaserelations.onetomany.owner.update')
        <hr>
        <h2>Members</h2>
        @include('databaserelations.oneToMany.member.store')
        @foreach ($oneToManyMembers as $oneToManyMember)
            @include('databaserelations.onetomany.member.allfields')
            @include('databaserelations.onetomany.member.destroy')
            @endforeach

      </div>
    </div>
  </div>
</div>
@endsection