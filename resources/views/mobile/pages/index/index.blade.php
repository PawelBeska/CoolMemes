@extends('mobile.master')

@section('header')
  @include('mobile.global.header.header')
@endsection()

@section('navbar')
  @include('mobile.global.navbar.navbar')
@endsection()

@section('content')
  @include('mobile.components.index.index')
@endsection()