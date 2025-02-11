@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="display-4 fw-bold">{{ $post->title }}</h1>
        <p class="lead">{{ $post->body }}</p>
        <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary mt-3">← Back to Posts</a>
    </div>
@endsection
