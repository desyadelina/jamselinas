@extends('layouts.app')

@section('title', 'Event Guide - JAMSELINAS XIV 2025')

@section('content')
    @include('pages.event-guide._hero')
    @include('pages.event-guide._features')
    @include('components.modals.event-guide.route-map')
@endsection