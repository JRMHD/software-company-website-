@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="author">Author Name</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" rows="4" required>{{ $post->body }}</textarea>
        </div>

        <div class="form-group">
            <label for="excerpt">Excerpt (Short Description)</label>
            <textarea name="excerpt" id="excerpt" class="form-control" rows="2">{{ $post->excerpt }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="link">Optional External Link</label>
            <input type="url" name="link" id="link" class="form-control" value="{{ $post->link }}">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" class="form-control" value="{{ $post->tags }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Post</button>
    </form>
@endsection
