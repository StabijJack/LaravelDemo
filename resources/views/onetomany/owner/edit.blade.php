@extends('onetomany.home') 
@section('subTitle') Edit Owner @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('onetomany.owner.submenu')
        @include('onetomany.owner.update')
        <hr>
        <h2>Members</h2>
        @include('oneToMany.member.store')
        @foreach ($oneToManyMembers as $oneToManyMember)
            @include('onetomany.member.allfields')
            @include('onetomany.member.destroy')
            @endforeach

      </div>
    </div>
  </div>
</div>
@endsection