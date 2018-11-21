@extends('layouts.app')
@section('title') LaravelDemo Home Page @endsection
@section('content')
    <a class="btn btn-primary info" href="{{ route('allFieldType.index') }}" role="button">Show All FieldTypes</a>
    <a class="btn btn-primary info" href="{{ route('onetoonehome') }}" role="button">Show Home of OneToOne</a>
    <a class="btn btn-primary info" href="{{ route('onetomanyhome') }}" role="button">Show Home of OneToMany</a>
    <a class="btn btn-primary info" href="{{ route('manytomanyhome') }}" role="button">Show Home of ManyToMany</a>
    <a class="btn btn-primary info" href="{{ route('hasManyThroughTop.index') }}" role="button">Show All hasManyThrough</a>
    <a class="btn btn-primary info" href="{{ route('polymorphichome') }}" role="button">Show Home of PolyMorhic</a>
@endsection