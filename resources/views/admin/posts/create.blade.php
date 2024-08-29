@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author">Author Name</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="excerpt">Excerpt (Short Description)</label>
            <textarea name="excerpt" id="excerpt" class="form-control" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="link">Optional External Link</label>
            <input type="url" name="link" id="link" class="form-control">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" class="form-control"
                placeholder="e.g., JavaScript, AI, Cybersecurity">
        </div>

        <!-- Automatically set category to Technology -->
        <input type="hidden" name="category" value="Technology">

        <button type="submit" class="btn btn-primary mt-3">Create Post</button>
    </form>
@endsection
