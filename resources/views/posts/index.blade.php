@extends('layouts.app')
@section('title', 'Blog Post')
@section('content')
    @foreach ($posts as $key => $post)
        <h1>{{ $key }}. {{ $post['title'] }}</h1>
    @endforeach
@endsection
