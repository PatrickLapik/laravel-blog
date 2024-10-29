@extends('partials.layout')

@section('title', 'Home page')

@section('content')
    <div class="container mx-auto">
        @foreach ($posts as $post)
            <div class="container rounded-md">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
@endsection
