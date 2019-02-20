@extends('databaserelations.allfieldtype.home') 

@section('subTitle') Edit @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        @include('databaserelations.allfieldtype.submenu')
        <form action="{{ route('allFieldType.update', $allFieldType->id) }}"" method="POST">
          @method('PATCH')
          @csrf
          @include('databaserelations.allfieldtype.allfields')        
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection