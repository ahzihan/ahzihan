@extends('app')
@section('page-title')
    Home
@endsection

@section('content')
    @include('components.hero')
    @include('components.contact-form')
    @include('components.about')
@endsection
