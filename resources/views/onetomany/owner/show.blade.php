@extends('onetomany.home') 
@section('subTitle') Show Owner @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetomany.owner.submenu')
        @include('onetomany.owner.allfields')
        <h2>Members</h2>
        @foreach ($oneToManyMembers as $oneToManyMember)
            @include('onetomany.member.allfields')
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection