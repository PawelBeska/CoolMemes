@extends('home.master')

@section('header')
    @include('home.global.header.header')
@endsection()

@section('sidebar')
    @include('home.global.sidebar.sidebar')
@endsection

@section('content')
    @include('home.components.auth.register')
@endsection()

@section('footer')
    @include('home.global.footer.footer')
@endsection()

