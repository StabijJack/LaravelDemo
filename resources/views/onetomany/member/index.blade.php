@extends('layouts.app') 

@section('title') Show all OneToOneRight @endsection
@section("content")
<h1>Members</h1>
<div class="row">
  @foreach($oneToManyMembers as $oneToManyMember)
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          @include('onetomany.member.submenu')
          @include('onetomany.member.update')
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection