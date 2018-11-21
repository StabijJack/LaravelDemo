@extends('allfieldtype.home') 
@section('subTitle') Create @endsection
@section("content")
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('allFieldType.store') }}" method="POST">
            @csrf
            @include('allfieldtype.allfields')        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection