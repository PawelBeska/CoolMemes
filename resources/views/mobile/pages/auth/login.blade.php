@extends('mobile.master')
@section('header')
    @include('mobile.global.header.header')
@endsection()

@section('navbar')
    @include('mobile.global.navbar.navbar')
@endsection()
@section('sidebar')
    @include('mobile.global.sidebar.sidebar')
@endsection
@section('content')
    @include('mobile.components.auth.login')
@endsection()
