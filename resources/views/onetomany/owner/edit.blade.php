@extends('layouts.app') 

@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h1>Owner</h1>
        @include('onetomany.owner.submenu')
        @include('onetomany.owner.update')
        <h2>Members</h2>
        @include('oneToMany.member.store')
        @foreach ($oneToManyMembers as $oneToManyMember)
            @include('onetomany.member.update')
            @include('onetomany.member.destroy')
            @endforeach

      </div>
    </div>
  </div>
</div>
@endsection