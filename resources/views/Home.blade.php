@extends('layouts.app')
@section('title') LaravelDemo Home Page @endsection
@section('content')
    <a class="btn btn-primary info" href="{{ route('allFieldType.index') }}" role="button">Show All FieldTypes</a>
@endsection