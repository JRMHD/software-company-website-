<!-- resources/views/admin/posts/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Create Post</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author Name</label>
                        <input type="text" name="author" id="author"
                            class="form-control @error('author') is-invalid @enderror">
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="4"
                            required></textarea>
                        @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt (Short Description)</label>
                        <textarea name="excerpt" id="excerpt" class="form-control @error('excerpt') is-invalid @enderror" rows="2"></textarea>
                        @error('excerpt')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Optional External Link</label>
                        <input type="url" name="link" id="link"
                            class="form-control @error('link') is-invalid @enderror">
                        @error('link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" id="tags"
                            class="form-control @error('tags') is-invalid @enderror"
                            placeholder="e.g., JavaScript, AI, Cybersecurity">
                        @error('tags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Automatically set category to Technology -->
                    <input type="hidden" name="category" value="Technology">

                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
