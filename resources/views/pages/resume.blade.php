@extends('app')
@section('page-title')
    Resume
@endsection

@section('content')
    @include('components.experience')
    @include('components.education')
    @include('components.professional_skill')
@endsection
