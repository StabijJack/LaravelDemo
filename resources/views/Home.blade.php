@extends('layouts.app')
@section('title') LaravelDemo Home Page @endsection
@section('content')
    <a class="btn btn-primary info" href="{{ route('allFieldType.index') }}" role="button">Show All FieldTypes</a>
    <a class="btn btn-primary info" href="{{ route('onetoonehome') }}" role="button">Show All OneToOne</a>
    <a class="btn btn-primary info" href="{{ route('onetomanyhome') }}" role="button">Show All OneToMany</a>
    <a class="btn btn-primary info" href="{{ route('manytomanyhome') }}" role="button">Show All ManyToMany</a>
    <a class="btn btn-primary info" href="{{ route('hasManyThroughTop.index') }}" role="button">Show All hasManyThrough</a>
@endsection