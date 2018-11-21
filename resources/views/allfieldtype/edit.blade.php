@extends('allfieldtype.home') 

@section('subTitle') Edit @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('allfieldtype.submenu')
        <form action="{{ route('allFieldType.update', $allFieldType->id) }}"" method="POST">
          @method('PATCH')
          @csrf
          @include('allfieldtype.allfields')        
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection