@extends('layouts.app')

@section('title', 'Saegis Campus | Higher Education in Sri Lanka')

@section(
    'meta_description',
    'Explore Saegis Campus academic programmes, faculties, news, events and student opportunities.'
)

@section('content')
    @include('home.hero')
    @include('home.introduction')
    @include('home.faculties')
    @include('home.news-events')
    @include('home.portal-links')
@endsection