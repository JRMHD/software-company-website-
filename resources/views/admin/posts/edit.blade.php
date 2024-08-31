@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Edit Post</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $post->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author Name</label>
                        <input type="text" name="author" id="author"
                            class="form-control @error('author') is-invalid @enderror"
                            value="{{ old('author', $post->author) }}">
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="4"
                            required>{{ old('body', $post->body) }}</textarea>
                        @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt (Short Description)</label>
                        <textarea name="excerpt" id="excerpt" class="form-control @error('excerpt') is-invalid @enderror" rows="2">{{ old('excerpt', $post->excerpt) }}</textarea>
                        @error('excerpt')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @if ($post->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid"
                                    style="max-width: 200px;">
                            </div>
                        @endif
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Optional External Link</label>
                        <input type="url" name="link" id="link"
                            class="form-control @error('link') is-invalid @enderror"
                            value="{{ old('link', $post->link) }}">
                        @error('link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" id="tags"
                            class="form-control @error('tags') is-invalid @enderror" value="{{ old('tags', $post->tags) }}"
                            placeholder="e.g., JavaScript, AI, Cybersecurity">
                        @error('tags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
