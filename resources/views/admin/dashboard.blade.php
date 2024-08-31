<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #f8f9fa;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #333;
            display: block;
        }

        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }

        .content {
            margin-left: 250px;
            /* Same as the width of the sidebar */
            padding: 20px;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Admin Dashboard</h4>
        <hr>
        <a href="{{ route('admin.posts.index') }}">Manage Posts</a>
        <a href="{{ route('admin.posts.create') }}">Create New Post</a>
        <hr>
        <a href="{{ route('admin.projects.index') }}">Manage Projects</a>
        <a href="{{ route('admin.projects.create') }}">Create New Project</a>
    </div>




</body>

</html>
