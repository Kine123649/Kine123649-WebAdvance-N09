<style>
    .btn-success:hover {
        background-color: #218838 !important; /* Màu xanh lá đậm hơn khi hover */
        color: yellow !important; /* Chữ chuyển sang vàng khi hover */
    }
</style>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card mb-4 shadow-lg border-2 border-gray-300"> {{-- Viền đậm hơn --}}
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="{{ route('blog.show', $post) }}" class="text-dark text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="text-muted small">Đăng ngày {{ $post->created_at->format('d/m/Y') }}</p>
                            <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                            <a href="{{ route('blog.show', $post) }}" class="btn btn-success btn-sm fw-bold text-dark" style="transition: 0.3s;">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection