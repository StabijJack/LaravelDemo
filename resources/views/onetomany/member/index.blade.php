@extends('onetomany.home') 
@section('subTitle') All Members @endsection
@section("content")
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