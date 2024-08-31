<!-- resources/views/admin/projects/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }

        .card {
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: none;
        }

        .invalid-feedback {
            display: block;
            font-size: 0.875em;
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Edit Project: {{ $project->name }}</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name">Project Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $project->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="3" required>{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="languages">Languages/Technologies</label>
                        <input type="text" class="form-control @error('languages') is-invalid @enderror"
                            id="languages" name="languages" value="{{ old('languages', $project->languages) }}"
                            required>
                        @error('languages')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="image">Project Image</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                            id="image" name="image">
                        @if ($project->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}"
                                    class="img-fluid" style="max-width: 200px;">
                            </div>
                        @endif
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="github_link">GitHub Link</label>
                        <input type="url" class="form-control @error('github_link') is-invalid @enderror"
                            id="github_link" name="github_link"
                            value="{{ old('github_link', $project->github_link) }}">
                        @error('github_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="live_link">Live Project Link</label>
                        <input type="url" class="form-control @error('live_link') is-invalid @enderror"
                            id="live_link" name="live_link" value="{{ old('live_link', $project->live_link) }}">
                        @error('live_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Project</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
