<!-- resources/views/admin/projects/create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Project</title>

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

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }

        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-plus"></i> Add New Project
            </div>
            <div class="card-body">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Project Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="4" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="languages" class="form-label">Languages/Technologies</label>
                        <input type="text" class="form-control @error('languages') is-invalid @enderror"
                            id="languages" name="languages" value="{{ old('languages') }}" required>
                        @error('languages')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Project Image</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                            id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="github_link" class="form-label">GitHub Link</label>
                        <input type="url" class="form-control @error('github_link') is-invalid @enderror"
                            id="github_link" name="github_link" value="{{ old('github_link') }}">
                        @error('github_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="live_link" class="form-label">Live Project Link</label>
                        <input type="url" class="form-control @error('live_link') is-invalid @enderror"
                            id="live_link" name="live_link" value="{{ old('live_link') }}">
                        @error('live_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Project
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
