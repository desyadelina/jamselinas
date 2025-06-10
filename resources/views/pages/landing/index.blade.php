@extends('layouts.app')

@section('title', 'JAMSELINAS - Jambore Sepeda Lipat Nasional')

@section('content')
    @include('pages.landing._hero')
    @include('pages.landing._about')
    @include('pages.landing._riders')
    @include('pages.landing._gallery')
@endsection
