@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Nút tạo bài viết -->
                <div class="mb-3">
                    <a href="{{ (route('blog.create')) }}" class="btn btn-success">Tạo bài viết</a>
                </div>

                @foreach ($posts as $post)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="{{ route('blog.show', $post) }}" class="text-dark text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="text-muted small">Đăng ngày {{ $post->created_at->format('d/m/Y') }}</p>
                            <p class="card-text">{{ Str::limit($post->content, 150) }}</p>

                            <div class="d-flex">
                                <a href="{{ route('blog.show', $post) }}" class="btn btn-primary btn-sm me-2">Xem chi tiết</a>
                                <a href="{{ route('blog.edit', $post) }}" class="btn btn-warning btn-sm me-2">Sửa</a>
                                <form action="{{ route('blog.destroy', $post) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
