@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4 fw-bold">Create Post</h1>
        <form action="{{ route('blog.store') }}" method="POST" onsubmit="alert('Tạo thành công')">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
