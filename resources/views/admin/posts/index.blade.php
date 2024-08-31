<!-- resources/views/admin/posts/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            max-width: 900px;
            margin-top: 30px;
        }

        .card {
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            background-color: #0d6efd;
            color: #ffffff;
            font-size: 1.25rem;
            font-weight: 500;
            border-bottom: 1px solid #0d6efd;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
            color: #212529;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .table thead {
            background-color: #e9ecef;
        }

        .custom-pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination {
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-newspaper"></i> All Posts
            </div>
            <div class="card-body">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Create New Post
                </a>

                @if (session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-striped">
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
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
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
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
