<!-- resources/views/admin/projects/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects</title>

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
            max-width: 1200px;
            margin-top: 30px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .alert {
            border-radius: 0.375rem;
            padding: 1rem;
        }

        table {
            background-color: #ffffff;
            border-radius: 0.375rem;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #e9ecef;
            color: #495057;
        }

        thead th {
            border-bottom: 2px solid #dee2e6;
        }

        tbody tr:nth-child(odd) {
            background-color: #f1f3f5;
        }

        tbody tr:hover {
            background-color: #e9ecef;
        }

        .pagination {
            justify-content: center;
        }

        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .pagination .page-link {
            border-radius: 0.375rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Manage Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Project
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Languages</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->languages }}</td>
                        <td>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
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
            {{ $projects->links('pagination::custom') }}
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
