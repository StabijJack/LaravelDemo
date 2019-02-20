@extends('databaserelations.allfieldtype.home') 

@section('subTitle') All @endsection
@section("content")
<div class="row">
  @if($allFieldTypes->count() > 0) 
    @foreach($allFieldTypes as $allFieldType)
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            @include('databaserelations.allfieldtype.submenu')
            @include('databaserelations.allfieldtype.allfields')
          </div>
        </div>
      </div>
    @endforeach
  @else 
    <a class="btn btn-primary info" href="{{ route('allFieldType.create') }}" role="button"> New</a>
  @endif
</div>
@endsection