@extends('layouts.admin')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create New Post</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Custom Pagination -->
    <div class="custom-pagination">
        {{ $posts->links('pagination::custom') }}
    </div>
@endsection
