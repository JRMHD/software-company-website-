@extends('layouts.app')

@section('content')
    <section id="blog-single" class="container py-5">
        <div class="heading">
            <h1 class="title">{{ $post->title }}</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img src="{{ $post->image ? asset('storage/' . $post->image) : 'images/blog/default.jpg' }}" alt="blog-img"
                    class="img-fluid">
                <div class="content mt-4">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Comments</h3>
                @if ($comments->isEmpty())
                    <p>No comments yet. Be the first to comment!</p>
                @else
                    @foreach ($comments as $comment)
                        <div class="comment mb-3">
                            <strong>{{ $comment->name }}:</strong>
                            <p>{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                @endif
                <!-- Display Success/Error Messages -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <!-- Comment Form -->
                <div class="comment-form mt-4">
                    <h4>Add a Comment</h4>
                    <form action="{{ route('comments.store', $post->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
